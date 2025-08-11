export default function manejarEliminarModal() {
    const modalEliminar = document.getElementById('modalEliminar');
    const formEliminar = document.getElementById('formEliminar');
    const idInputEliminar = document.getElementById('idEliminar');
    const cancelarEliminarBtn = document.getElementById('cancelarEliminar');
    const cerrarModalEliminarBtn = document.getElementById('cerrarModalEliminar');

    // Función para abrir el modal
    const abrirModal = (id) => {
        idInputEliminar.value = id;
        formEliminar.action = `/umamusumes/${id}`;
        modalEliminar.classList.remove('hidden');
    };

    // Función para cerrar el modal
    const cerrarModal = () => {
        modalEliminar.classList.add('hidden');
    };

    // 🔁 ✅ Delegación de eventos para botones de eliminar (dinámicos o estáticos)
    document.addEventListener('click', (e) => {
        if (e.target.matches('.btn-eliminar')) {
            e.preventDefault(); // por si es un enlace
            const id = e.target.dataset.id;
            abrirModal(id);
        }
    });

    // Cerrar modal (cancelar o fuera del modal)
    cancelarEliminarBtn?.addEventListener('click', cerrarModal);
    cerrarModalEliminarBtn?.addEventListener('click', cerrarModal);
    modalEliminar.addEventListener('click', (e) => {
        if (e.target === modalEliminar) {
            cerrarModal();
        }
    });

    // Enviar el formulario por AJAX
    formEliminar.addEventListener('submit', async (e) => {
        e.preventDefault();

        const id = idInputEliminar.value;
        const csrfToken = formEliminar.querySelector('input[name="_token"]').value;

        try {
            const response = await fetch(formEliminar.action, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });

            if (!response.ok) {
                const errorData = await response.json();
                throw new Error(errorData.message || 'No se pudo eliminar');
            }

            // Eliminar del DOM
            const tarjeta = document.getElementById(`tarjeta-${id}`);
            if (tarjeta) tarjeta.remove();

            cerrarModal();

        } catch (error) {
            console.error('Error al eliminar:', error);
            alert('Error al eliminar: ' + error.message);
        }
    });
}
