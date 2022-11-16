<script>
import axios from 'axios';

  export default {
    name: 'Modal',
    data: function() {
        return {
            'name': '',
            'value': '',
            'quantify': '',
            'provider': '',
            'description': '',
        }
    },
    methods: {
      cadastrar(){
        axios.post('/produto/cadastrar', {
            'name' : this.name,
            'value': this.value,
            'quantify': this.quantify,
            'provider': this.provider,
            'description': this.description,
        }).then((data) => {
          // console.log(data)
            axios.get('/getAllOrderByname').then(location.reload())
          this.$emit('close');
          // alert("mandei saporra: " + data.data.message)
        }).catch((erro) => {
          console.error(erro)
          alert("caguei saporra: " + erro.titulo + erro.message)
        })
      },
      close() {
        this.$emit('close');
      },
    },
  };
</script>
<template>
  <div class="modal-backdrop">
    <div class="modal">
   <div class="bg-opacity-30 overflow-auto py-12 bg-gray-700 transition duration-150 ease-in-out z-10 absolute top-0 right-0 bottom-0 left-0" id="modal">
                <div role="alert" class="container mx-auto w-11/12 md:w-2/3 max-w-lg">
                    <div class="relative py-8 px-5 md:px-10 bg-white shadow-md rounded border border-gray-400">
                        <div class="w-full flex justify-start text-gray-600 mb-3">
                            <svg  xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-wallet" width="52" height="52" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <path d="M17 8v-3a1 1 0 0 0 -1 -1h-10a2 2 0 0 0 0 4h12a1 1 0 0 1 1 1v3m0 4v3a1 1 0 0 1 -1 1h-12a2 2 0 0 1 -2 -2v-12" />
                                <path d="M20 12v4h-4a2 2 0 0 1 0 -4h4" />
                            </svg>
                        </div>
                        <h1 class="text-gray-800 font-lg font-bold tracking-normal leading-tight mb-4">Insira as informações</h1>
                        <label for="name" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Nome</label>
                        <input id="name" v-model="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Garrafa" />
                        <label for="valor" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Preço</label>
                        <input id="valor" v-model="value" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="R$10,00" />
                        <label for="estoque" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Estoque</label>
                        <input id="estoque" v-model="quantify" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="10" />
                           <label for="fornecedor" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Fornecedor</label>
                        <input id="fornecedor" v-model="provider" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="QC Brasil" />
                        <label for="descrição" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Descrição</label>
                        <input id="descrição" v-model="description" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="Pequena" />
                     <div class="flex items-center justify-start w-full">

                            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 transition duration-150 ease-in-out hover:bg-blue-600 bg-blue-700 rounded text-white px-8 py-2 text-sm" @click="cadastrar()">Enviar</button>

                            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" @click="close">Cancelar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

