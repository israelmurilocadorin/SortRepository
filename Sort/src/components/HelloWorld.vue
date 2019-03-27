<template>
  <div class="hello">
    <div class="container">
      <h1>{{ msg }}</h1>

      <div class="row"> 
        <div class="col-md-12">
          <div class="help">?
            <span class="msg-help">das</span>
          </div>
        </div>

        <div class="col-md-12">
          <div class="input-group input-group-lg">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-lg">Lista de números:</span>
            </div>
            <input type="text" v-model="array.valor" :placeholder="texto_place_holder" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
          </div> 
        </div>
      </div>
     
      <div class="row mt-2">
        <div class="col-md-6">
          <button @click="limparTexto" class="btn btn-outline-secondary" type="button">Limpar</button>
        </div>        
        <div class="col-md-6">
          <button @click="ordenar" class="btn btn-outline-secondary" type="button">Ordenar</button>
        </div>
      </div>

    </div><!--/container-->
  </div>
</template>
<script>


export default {
  name: 'HelloWorld',
  data () {
    return {
      msg: 'Ordenação de Lista',
      texto_place_holder: 'Digite aqui ...',
      array: {
        type: String,
        valor: ""
      }
    }
  },

  methods: {
    ordenar: function(){
      console.log("ARRAY PARA SER ORDENADO:")
      console.log(this.array.valor.split(" "))
    },
    limparTexto: function(){
      this.array.valor = ''
    }
  }
}
</script>

<style>
button{
  width:100%;
}
.help{
  display:inline-block;
  float:right;
  font-weight: bold;
}

.help:hover{

}
.msg-help{
  display:none;
}
</style>
