export default function manejarEditarModal() {
    const modalEditar = document.getElementById('modalEditar');
    const cerrarModalEditar = document.querySelectorAll('#cerrarModalEditar');
    const contenedor = document.getElementById('contenedor-tarjetas');

    // Usar delegación de eventos
    contenedor.addEventListener('click', (e) => {
        const btn = e.target.closest('.btn-editar');
        if (!btn) return;

        const { id, nombre, velocidad, stamina } = btn.dataset;

        document.getElementById('editarId').value = id;
        document.getElementById('editarNombre').value = nombre;
        document.getElementById('editarVelocidad').value = velocidad;
        document.getElementById('editarStamina').value = stamina;

        const form = document.getElementById('formEditar');
        form.action = `/umamusumes/${id}`;
        form.method = 'POST';

        let methodInput = form.querySelector('input[name="_method"]');
        if (!methodInput) {
            methodInput = document.createElement('input');
            methodInput.type = 'hidden';
            methodInput.name = '_method';
            form.appendChild(methodInput);
        }
        methodInput.value = 'PUT';

        modalEditar.classList.remove('hidden');
    });

    cerrarModalEditar.forEach(btn => {
        btn.addEventListener('click', () => modalEditar.classList.add('hidden'));
    });

    modalEditar.addEventListener('click', (e) => {
        if (e.target === modalEditar) modalEditar.classList.add('hidden');
    });
}
