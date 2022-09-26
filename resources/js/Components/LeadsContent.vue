<script setup>
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import axios from 'axios';

    </script>
    <script>
    import ModalExcluirLeads from './ModalExcluirLeads.vue';
    import ModalLeads from './ModalLeads.vue';
    
      export default {
        name: 'LeadsContent',
        components: {
          ModalLeads,
          ModalExcluirLeads
        },
        data() {
          return {
            isModalVisible: false,
            isModalExcluirLeadsVisible: false,
            leads : [],
          };
        },
    
        methods: {
          getAllLeads(){
            axios.get('/getAllLeads').then((data) => {
              this.leads = data.data
            })
          },
          showModalLeads() {
            this.isModalVisible = true;
          },
          closeModalLeads() {
            this.isModalVisible = false;
          },
          showisModalExcluirLeads() {
            this.isModalExcluirLeadsVisible = true;
          },
          closeisModalExcluirLeads() {
            this.isModalExcluirLeadsVisible = false;
          },
          deleta(id){
            axios.delete('/deleteLeads', 
            { params: { id: id } }
            ).then((data) => {
                console.log(data)
            }).catch((error)=>{
                console.log(error)
            })
            this.getAllLeads()
          }
        },
        created(){
          this.getAllLeads()                 
        },
      };
    </script>
    
    <Modal/>
    
    <Modal/>
    <template>
        <!-- component -->
        <div class="sm:px-6 w-full m-0">
                    <div class="px-4 md:px-10 py-4 md:py-7">
                        <div class="flex items-center justify-between">
                            <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">Leads</p>
                            <div class="py-3 px-4 flex items-center text-sm font-medium leading-none text-gray-600 bg-gray-200 hover:bg-gray-300 cursor-pointer rounded">
                                <p>Sort By:</p>
                                <select aria-label="select" class="focus:text-indigo-600 focus:outline-none bg-transparent ml-1">
                                    <option class="text-sm text-indigo-800">Latest</option>
                                    <option class="text-sm text-indigo-800">Oldest</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white py-4 md:py-7 px-4 md:px-8 xl:px-10">
                        <div class="sm:flex items-center justify-left">
                            <ModalLeads v-show="isModalVisible" @close="closeModal"/>
                            <button @click="showModalLeads" class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 mt-4 sm:mt-0 inline-flex items-start justify-left px-6 py-3 bg-blue-800 hover:bg-blue-900  focus:outline-none rounded">
                                <p class="text-sm font-medium leading-none text-white" > + Leads</p>
                            </button>
                        </div>
                        <div class="mt-7 overflow-x-auto">
                            <table class="w-full whitespace-nowrap">
                                <tbody>
                                    <tr tabindex="0" class="focus:outline-none h-16 rounded bg-gradient-to-r from-blue-700 via-blue-800 to-blue-800">
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-white-700 mr-2">Nome</p>
                                            </div>
                                        </td>
                                        <td class="pl-24">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-white-600 ml-2">Telefone</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-white-600 ml-2">Email</p>
                                            </div>
                                        </td>
                                         <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-white ml-2">Organização</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-white ml-2">Gênero</p>
                                            </div>
                                        </td>
                                        <td class="">
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-red-500 mr-2">Excluir</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="h-3"></tr>
                                    <tr tabindex="0" class="focus:outline-none  h-16 border border-gray-100 rounded" v-for="leads in leads" :key="leads.id">
                                        <td  class="focus:text-indigo-600 ">
                                            <div class="flex items-center pl-5">
                                                <p class="text-base font-medium leading-none text-gray-700 mr-2">{{leads.name}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-24">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{leads.phone}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{leads.email}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{leads.organization}}</p>
                                            </div>
                                        </td>
                                        <td class="pl-5">
                                            <div class="flex items-center">
                                                <p class="text-sm leading-none text-gray-600 ml-2">{{leads.gender}}</p>
                                            </div>
                                        </td>
                                    <td class="pl-5">
                                        <div class="flex items-center">
                                            <ModalExcluirLeads v-show="isModalExcluirLeadsVisible" @close="closeisModalExcluirLeads"/>
                                            <img src="../../images/trash2.png" class="mr-5 h-6 sm:h-9 cursor-pointer" alt="trash" @click="showisModalExcluirLeads"/>
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
    