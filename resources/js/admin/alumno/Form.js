import AppForm from '../app-components/Form/AppForm';

Vue.component('alumno-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nombre:  '' ,
                ApellidoPaterno:  '' ,
                ApellidoMaterno:  '' ,
                Telefono:  '' ,
                Edad:  '' ,
                FechaNacimiento:  '' ,
                
            }
        }
    }

});