<script setup>
  import { Head, Link } from '@inertiajs/inertia-vue3';
  // import axios from 'axios';
  import Modal from './Modal.vue';
  </script>
<script>
  import axios from 'axios';
  
    export default {
      name: 'ModalLeads',
      data: function() {
          return {
              'name': '',
              'phone': '',
              'email': '',
              'organization': '',
              'gender': '',
          }
      },
      methods: {
        cadastrar(){
          axios.post('/leads/cadastrar', {
              'name' : this.name,
              'phone': this.phone,
              'email': this.email,
              'organization': this.organization,
              'gender': this.gender,
          }).then((data) => {
            // console.log(data)
            this.LeadsContent.getAllLeads();
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
                        <input id="name" v-model="name" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="James" />
                        <label for="tel" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Telefone</label>
                        <input id="tel" v-model="phone" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="99543221" />
                           <label for="email" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Email</label>
                        <input id="email" v-model="email" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="felipinhozika@gmail.com" />
                           <label for="org" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Organização</label>
                        <input id="org" v-model="organization" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="QC Brasil" />
                           <label for="gen" class="text-gray-800 text-sm font-bold leading-tight tracking-normal">Gênero</label>
                        <input id="gen" v-model="gender" class="mb-5 mt-2 text-gray-600 focus:outline-none focus:border focus:border-indigo-700 font-normal w-full h-10 flex items-center pl-3 text-sm border-gray-300 rounded border" placeholder="M/F" />
                     <div class="flex items-center justify-start w-full">

                            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 bg-indigo-700 rounded text-white px-8 py-2 text-sm" @click="cadastrar">Enviar</button>

                            <button class="focus:outline-none focus:ring-2 focus:ring-offset-2  focus:ring-gray-400 ml-3 bg-gray-100 transition duration-150 text-gray-600 ease-in-out hover:border-gray-400 hover:bg-gray-300 border rounded px-8 py-2 text-sm" @click="close">Cancelar</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

