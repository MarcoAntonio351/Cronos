<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import axios from 'axios';
import Modal from './Modal.vue';
</script>
<script>
import modal from './Modal.vue';

  export default {
    name: 'ProductContent',
    components: {
      Modal,

    },
    data() {
      return {
        isModalVisible: false,
        produtos : [],
      };
    },

    methods: {
        getAllOrderByName(){
        axios.get('/getAllOrderByName').then((data) => {
          this.produtos = data.data
        })
      },
      showModal() {
        this.isModalVisible = true;
      },
      closeModal() {
        this.isModalVisible = false;
      },
      deleta(id){
        alert("deletado com sucesso")
        axios.delete('/deleteProduct', 
        { params: { id: id } }
        ).then((data) => {
            console.log(data)
        }).catch((error)=>{
            console.log(error)
        })
        this.getAllOrderByName()
      }
    },
    created(){
      this.getAllOrderByName()                 
    },
  };
</script>
<style>
body {background-color: #E7F6FE;}
</style>
<Modal/>
<template class>
<div class="sm:px-6 w-full m-0">
            <div class="px-4 md:px-10 py-4 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Produtos</p>
                    <!-- <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                        <p>Sort By:</p>
                        <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                            <option class="text-sm text-indigo-800">Latest</option>
                            <option class="text-sm text-indigo-800">Oldest</option>
                        </select>
                    </div> -->
                </div>
            </div>
            <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                <div class="sm:flex items-center justify-left">
                    <Modal v-show="isModalVisible" @close="closeModal"/>
                    <button @click="showModal" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-left px-6 py-3 bg-blue-800 hover:bg-blue-900 focus:outline-none rounded">
                        <p class="text-sm font-medium leading-none text-white" > + Produtos</p>
                    </button>
                </div>
                <div class="shadow-xl mt-7 overflow-y-auto h-[36rem]">
                    <table class="shadow-xl w-full whitespace-nowrap">
                        <tbody>
                            <tr tabindex="0" class="focus:outline-none h-16 rounded bg-gradient-to-r from-blue-700 via-blue-800 to-blue-800">
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="text-base font-medium leading-none text-white mr-2">Nome</p>
                                    </div>
                                </td>
                                <td class="pl-24">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-white ml-2">Em estoque</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-white ml-2">Preço</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-white ml-2">Fornecedor</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-sm leading-none text-white ml-2">Descrição</p>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="text-base font-medium leading-none text-red-500 mr-2">Excluir</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="focus:outline-none  h-16 border border-gray-100 rounded" v-for="produto in produtos" :key="produto.id">
                                
                                <td  class="focus:text-indigo-600 ">
                                    <div class="flex items-center pl-5">
                                        <p class="text-base font-medium leading-none text-gray-700 mr-2">{{produto.name}}</p>
                                    </div>
                                </td>
                                <td class="pl-24">
                                    <div class="flex items-center">
                                        <p class="text-base leading-none text-gray-600 ml-2">{{produto.quantify}}</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-base leading-none text-gray-600 ml-2">{{produto.value}}</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-base leading-none text-gray-600 ml-2">{{produto.provider}}</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <p class="text-base leading-none text-gray-600 ml-2">{{produto.description}}</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="../../images/trash2.png" class="mr-5 h-6 sm:h-9 cursor-pointer" alt="trash" @click="deleta(produto.id)"/>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</template>
