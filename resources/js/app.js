import './bootstrap';
import 'flowbite';
import Dropzone from 'dropzone';
import { drop } from 'lodash';

Dropzone.autoDiscover = false;

const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Carga tu imagen aqui',
    acceptedFiles: ".png,.jpg,.jpeg,.gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Eliminar archivos',
    maxFiles:1,
    uploadMultiple: false,

    init: function(){

        if(document.querySelector('[name="imagen"]').value.trim()){
            const imagenPublicada={};
            imagenPublicada.size=2222;
            imagenPublicada.name=document.querySelector('[name="imagen"]').value;
            this.options.addedfile.call(this,imagenPublicada);
            this.options.thumbnail.call(this,imagenPublicada,'/uploads/${imagenPublicada.name}');
            imagenPublicada.previewElement.classList.add("dz-success","dz-complete");

        
        }
    },


});




dropzone.on("success",function(file,message){
    document.querySelector('[name="imagen"]').value=response.imagen;


});

dropzone.on("remove",function(file,message){
    document.querySelector('[name="imagen"]').value="";
});