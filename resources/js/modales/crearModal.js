export default function manejarCrearModal() {
    const abrirModalBtn = document.getElementById('abrirModal');
    const modalCrear = document.getElementById('modalCrear');
    const cerrarModalBtn = document.getElementById('cerrarModal');

    if (abrirModalBtn && modalCrear && cerrarModalBtn) {
        abrirModalBtn.addEventListener('click', () => modalCrear.classList.remove('hidden'));
        cerrarModalBtn.addEventListener('click', () => modalCrear.classList.add('hidden'));

        modalCrear.addEventListener('click', (e) => {
            if (e.target === modalCrear) modalCrear.classList.add('hidden');
        });
    }
}
