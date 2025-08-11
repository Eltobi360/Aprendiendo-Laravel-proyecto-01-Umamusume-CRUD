import manejarCrearModal from './modales/crearModal.js';
import manejarCreacionAjax from './modales/crear.js';
import manejarEditarModal from './modales/editarModal.js';
import manejarEditarModalAjax from './modales/editar.js';
import manejarEliminarModal from './modales/eliminarModal.js';
import './anime.js';


document.addEventListener('DOMContentLoaded', () => {
    manejarCrearModal();
    manejarCreacionAjax();
    manejarEditarModal();
    manejarEditarModalAjax();
    manejarEliminarModal();
});




// document.addEventListener('DOMContentLoaded', () => {

//     // === CREAR MODAL ===
//     const abrirModalBtn = document.getElementById('abrirModal');
//     const modalCrear = document.getElementById('modalCrear');
//     const cerrarModalBtn = document.getElementById('cerrarModal');

//     if (abrirModalBtn && modalCrear && cerrarModalBtn) {
//         abrirModalBtn.addEventListener('click', () => modalCrear.classList.remove('hidden'));
//         cerrarModalBtn.addEventListener('click', () => modalCrear.classList.add('hidden'));

//         modalCrear.addEventListener('click', (e) => {
//             if (e.target === modalCrear) modalCrear.classList.add('hidden');
//         });
//     }

//     // === EDITAR MODAL ===
//     const modalEditar = document.getElementById('modalEditar');
//     const cerrarModalEditar = document.getElementById('cerrarModalEditar');
//     const formEditar = document.getElementById('formEditar');

//     document.querySelectorAll('.btn-editar').forEach(btn => {
//         btn.addEventListener('click', () => {
//             const id = btn.dataset.id;
//             const nombre = btn.dataset.nombre;
//             const velocidad = btn.dataset.velocidad;
//             const stamina = btn.dataset.stamina;

//             // Rellenar formulario
//             document.getElementById('editarId').value = id;
//             document.getElementById('editarNombre').value = nombre;
//             document.getElementById('editarVelocidad').value = velocidad;
//             document.getElementById('editarStamina').value = stamina;

//             // Ajustar atributos del formulario
//             formEditar.setAttribute('action', `/umamusumes/${id}`);
//             formEditar.setAttribute('method', 'POST');

//             // Agregar o actualizar input _method
//             let methodInput = formEditar.querySelector('input[name="_method"]');
//             if (!methodInput) {
//                 methodInput = document.createElement('input');
//                 methodInput.type = 'hidden';
//                 methodInput.name = '_method';
//                 formEditar.appendChild(methodInput);
//             }
//             methodInput.value = 'PUT';

//             modalEditar.classList.remove('hidden');
//         });
//     });

//     cerrarModalEditar?.addEventListener('click', () => modalEditar.classList.add('hidden'));

//     modalEditar?.addEventListener('click', (e) => {
//         if (e.target === modalEditar) modalEditar.classList.add('hidden');
//     });

//     // === ELIMINAR MODAL ===
//     const modalEliminar = document.getElementById('modalEliminar');
//     const formEliminar = document.getElementById('formEliminar');
//     const idInputEliminar = document.getElementById('idEliminar');
//     const cancelarEliminarBtn = document.getElementById('cancelarEliminar');

//     document.querySelectorAll('.btn-eliminar').forEach(btn => {
//         btn.addEventListener('click', () => {
//             const id = btn.dataset.id;
//             idInputEliminar.value = id;
//             formEliminar.setAttribute('action', `/umamusumes/${id}`);
//             modalEliminar.classList.remove('hidden');
//         });
//     });

//     cancelarEliminarBtn?.addEventListener('click', () => {
//         modalEliminar.classList.add('hidden');
//     });

// });



// document.addEventListener('DOMContentLoaded', () => {
//     const abrirModalBtn = document.getElementById('abrirModal');
//     const modal = document.getElementById('modalCrear');
//     const cerrarModalBtn = document.getElementById('cerrarModal');

//     const modalEditar = document.getElementById('modalEditar');
//     const cerrarModalEditar = document.getElementById('cerrarModalEditar');
//     const formEditar = document.getElementById('formEditar');


// const modale = document.getElementById('modalEliminar');
// const form = document.getElementById('formEliminar');
// const idInput = document.getElementById('idEliminar');
// const cancelarBtn = document.getElementById('cancelarEliminar');




// document.querySelectorAll('.btn-eliminar').forEach(btn => {
//     btn.addEventListener('click', () => {
//         const id = btn.dataset.id;
//         idInput.value = id;

//         form.action = `/umamusumes/${id}`; // Fíjate que está con slash y plural
//         modale.classList.remove('hidden');
//     });
// });

// cancelarBtn.addEventListener('click', () => {
//     modale.classList.add('hidden');
// });




//     document.querySelectorAll('.btn-editar').forEach(btn => {
//         btn.addEventListener('click', () => {
//              const id = btn.dataset.id;
//              const nombre = btn.dataset.nombre;
//              const velocidad = btn.dataset.velocidad;
//              const stamina = btn.dataset.stamina;
//             // Rellenar el formulario
//             document.getElementById('editarId').value = id;
//             document.getElementById('editarNombre').value = nombre;
//             document.getElementById('editarVelocidad').value = velocidad;
//             document.getElementById('editarStamina').value = stamina;

//             const form = document.getElementById('formEditar');
//             form.setAttribute('action', `/umamusumes/${id}`); // Ruta de actualización en Laravel
//             form.setAttribute('method', 'POST');

//             let methodInput = form.querySelector('input[name="_method"]');
//              if (!methodInput) {
//                  methodInput = document.createElement('input');
//                  methodInput.setAttribute('type', 'hidden');
//                  methodInput.setAttribute('name', '_method');
//                  form.appendChild(methodInput);
//              }
//              methodInput.setAttribute('value', 'PUT');


//             modalEditar.classList.remove('hidden');
//         });
//     });

//     cerrarModalEditar.addEventListener('click', () => {
//         modalEditar.classList.add('hidden');
//     });

//     modalEditar.addEventListener('click', (e) => {
//         if (e.target === modalEditar) {
//             modalEditar.classList.add('hidden');
//         }
//     });

//     if (abrirModalBtn && modal && cerrarModalBtn) {
//         abrirModalBtn.addEventListener('click', () => {
//             modal.classList.remove('hidden');
//         });

//         cerrarModalBtn.addEventListener('click', () => {
//             modal.classList.add('hidden');
//         });

//         // Cerrar modal si se hace clic fuera del contenido
//         modal.addEventListener('click', (e) => {
//             if (e.target === modal) {
//                 modal.classList.add('hidden');
//             }
//         });
//     }
// });
