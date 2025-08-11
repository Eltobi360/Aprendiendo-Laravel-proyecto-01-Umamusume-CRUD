export default function configurarEliminacionAjax() {
    const formEliminar = document.getElementById('formEliminar');
    const idInputEliminar = document.getElementById('idEliminar');
    const modalEliminar = document.getElementById('modalEliminar');

    formEliminar.addEventListener('submit', async (e) => {
        e.preventDefault();

        const id = idInputEliminar.value;
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        try {
            const response = await fetch(`/umamusumes/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': csrfToken,
                    'Accept': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error('No se pudo eliminar');
            }

            // Eliminar la tarjeta del DOM
            const tarjeta = document.querySelector(`#tarjeta-${id}`);
            if (tarjeta) tarjeta.remove();

            // Ocultar el modal
            modalEliminar.classList.add('hidden');

        } catch (error) {
            console.error('Error al eliminar:', error);
        }
    });
}
