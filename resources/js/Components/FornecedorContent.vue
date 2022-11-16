<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import axios from 'axios';
import ModalOutfitters from './ModalOutfitters.vue';
</script>
<script>
import modal from './ModalOutfitters.vue';
  export default {
    name: 'FornecedorContent',
    components: {
      ModalOutfitters,
    },
    data() {
      return {
        isModalOutfittersVisible: false,
        outfitters: [],
      };
    },
    methods: {
      getAllOutfitters(){
        axios.get('/getAllOutfitters').then((data) => {
          this.outfitters = data.data
        })
      },
      showModalOutfitters() {
        this.isModalOutfittersVisible = true;
      },
      closeModalOutfitters() {
        this.isModalOutfittersVisible = false;
      },
      deleta(id){
        alert("deletado com sucesso")
        axios.delete('/deleteOutfitters', 
        { params: { id: id } }
        ).then((data) => {
            console.log(data)
        }).catch((error)=>{
            console.log(error)
        })
        this.getAllOutfitters()
      }
    },
    created(){
      this.getAllOutfitters()                 
    },
  };
</script>

    
    <ModalOutfitters/>
    <template>
    <!-- component -->
    <div class="sm:px-6 w-full m-0">
                <div class="px-4 md:px-10 py-4 md:py-7">
                    <div class="flex items-center justify-between">
                        <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Fornecedores</p>

                    </div>
                </div>
                <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                    <div class="sm:flex items-center justify-left">
                        <ModalOutfitters v-show="isModalOutfittersVisible" @close="closeModalOutfitters"/>
                        <button @click="showModalOutfitters" class="focus:ring-2 focus:ring-offset-2 focus:ring-blue-700 transition duration-150 ease-in-out hover:bg-blue-600 bg-blue-700 mt-4 sm:mt-0 inline-flex items-start justify-left px-6 py-3 bg-blue-800 hover:bg-blue-900 focus:outline-none rounded">
                            <p class="text-sm font-medium leading-none text-white" > + Fornecedor</p>
                        </button>
                    </div>
                    <div class="mt-7 overflow-x-auto">
                        <table class="w-full whitespace-nowrap">
                            <tbody>
                                <tr tabindex="0" class="focus:outline-none h-16 rounded bg-gradient-to-r from-blue-700 via-blue-800 to-blue-800">
                                    <td class="">
                                        <div class="flex items-center pl-5">
                                            <p class="text-base font-medium leading-none text-white mr-2">Nome</p>
                                        </div>
                                    </td>
                                    <td class="pl-24">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-white ml-2">Telefone</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-white ml-2">Email</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-white ml-2">Endereço</p>
                                        </div>
                                    </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <p class="text-sm leading-none text-white ml-2">Produto fornecido</p>
                                        </div>
                                    </td>
                                    <td class="">
                                        <div class="flex items-center pl-5">
                                            <p class="text-base font-medium leading-none text-red-500 mr-2">Excluir</p>
                                        </div>
                                    </td>
                                </tr>
                               <tr class="h-3"></tr>
                                    <tr tabindex="0" class="focus:outline-none  h-16 border border-gray-100 rounded" v-for="outfitters in outfitters" :key="outfitters.id">
                                        <td  class="focus:text-indigo-600 ">
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">{{outfitters.name}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-24">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{outfitters.phone}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{outfitters.email}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{outfitters.adress}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{outfitters.productf}}</p>
                                            </div>
                                        </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                        <img src="../../images/trash3.png" class="mr-5 h-6 sm:h-9 cursor-pointer" alt="trash" @click="deleta(outfitters.id)"/>
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
    