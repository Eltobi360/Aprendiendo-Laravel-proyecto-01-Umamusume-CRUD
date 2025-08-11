import manejarEditarModal from './editarModal.js';

export default function manejarEdicionAjax() {
    const form = document.getElementById('formEditar');
    const modal = document.getElementById('modalEditar');

    if (!form) return;

    form.addEventListener('submit', async function (e) {
        e.preventDefault();

        const formData = new FormData(form);

        try {
            const respuesta = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: formData
            });

            if (!respuesta.ok) throw new Error('Error en la respuesta del servidor');

            const datos = await respuesta.json();

            // Reemplazar tarjeta
            const tarjetaAntigua = document.querySelector(`.tarjeta[data-id="${datos.id}"]`);
            if (tarjetaAntigua) {
                tarjetaAntigua.outerHTML = datos.html;
            }

            // 👇 Reasignar evento a nuevos botones editar
            manejarEditarModal();

            // Limpiar y cerrar modal
            form.reset();
            modal.classList.add('hidden');

        } catch (error) {
            console.error('Error al editar Umamusume:', error);
            alert('Ocurrió un error al editar.');
        }
    });
}
