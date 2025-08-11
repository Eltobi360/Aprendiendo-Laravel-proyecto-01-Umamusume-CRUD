
export default function manejarCreacionAjax() {
    const form = document.getElementById('form-crear');
    const modal = document.getElementById('modalCrear');
    const contenedor = document.getElementById('contenedor-tarjetas'); // Asegúrate de tener este div en el HTML

    if (form && contenedor) {
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
                contenedor.insertAdjacentHTML('afterbegin', datos.html);


                form.reset();
                modal.classList.add('hidden');
            } catch (error) {
                console.error('Error al guardar Umamusume:', error);
                alert('Ocurrió un error al guardar.');
            }
        });
    }
}
