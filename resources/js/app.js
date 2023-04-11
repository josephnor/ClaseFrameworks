import './bootstrap';
import 'flowbite';
import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Carga tu imagen aqui',
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Eliminar archivos',
    maxFiles:1,
    uploadMultiple: false


})
