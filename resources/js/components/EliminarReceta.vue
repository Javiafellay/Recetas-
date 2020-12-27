<template>
    <input type="submit" class="btn btn-danger d-block w-100 mb-2" value="Eliminar x"
    @click="eliminarReceta">
</template>

<script>
export default {
    props: ['recetaId'],
    methods: {
        eliminarReceta(){
            this.$swal({
            title: 'Estás Seguro?',
            text: "Esta acción es irreversible",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, Borralo!',
            cancelButtonText: 'Me arrepenti'
            }).then((result) => {
            if (result.isConfirmed) {
                this.$swal({
                title: 'Receta Borrada!',
                text: 'Tu archivo ha sido anulado exitosamente',
                icon: 'success'
    })
  }
})
            
                }
            }
        }
</script>