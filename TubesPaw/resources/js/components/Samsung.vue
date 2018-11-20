<template>
    <div class="container">
        <h2>COBA TUBES</h2>

        <div>
            <form action="./api/samsungs" method="POST" @submit.prevent = "addSamsung()">
                <label>Nama: </label><br>
                <input type="text" name="nama" v-model="nama"/><br>
                <label>Gambar: </label><br>
                <input type="file" name="gambar" v-bind="gambar"/><br>
                <label>Harga: </label><br>
                <input type="text" name="harga" v-model="harga"/><br>
                <input type="submit" class="btn btn-success" value="Add">
            </form>
        </div>

        <p>List Samsung</p>
        <table class="table" border="1">
        <tr>
          <td>Gambar</td>
          <td>Nama</td>
          <td>Harga</td>
          <td>aksi</td>
        </tr>
        <tr v-for="samsung in samsungs" :key="samsung.id">  
            <td>{{ samsung.gambar }}</td>
            <td>{{ samsung.nama }}</td>
            <td>{{ samsung.harga }}</td>
          <div v-if="!samsung.edit">
            <td><button class="btn btn-danger" @click="deleteDosen(samsung.id)">Remove</button>
            <button class="btn btn-primary" @click="editDosen(samsung.id)">Edit</button></td>
          </div>
          <div v-else>
            <input type="text" v-model="samsung.nama">
            <input type="text" v-model="samsung.gambar">
            <input type="text" v-model="samsung.harga">
            <td><button @click="saveEdit(samsung)">Save</button></td>
            <td><button @click="cancelEdit(samsung.id)">Cancel</button></td>
          </div>
        </tr>
      </table>
    </div>
</template>

<script>
export default {
    data(){
        return{
            samsungs:[],
            id:'',
            nama:'',
            gambar:'',
            harga:''
            
        }
        
    },
    mounted(){
        console.log('Component mounted.')
    },
    methods:{
        addSamsung(){
            axios.post('./api/samsungs',{ nama:this.nama });
            axios.post('./api/samsungs',{ gambar:this.gambar });
            axios.post('./api/samsungs',{ harga:this.harga });
            alert('sukses');
        }
    }
}
</script>

<style>

</style>
