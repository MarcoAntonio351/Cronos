<script setup>
    import { Head, Link } from '@inertiajs/inertia-vue3';
    import axios from 'axios';
    </script>
    <script>
      export default {
        methods: {
            getleadsNumber(){
            axios.get('/getLeadsNumber').then((data) => {
              this.Leads = data.data
              console.log(data.data)
            })
          },
        created(){
          this.getleadsNumber()                 
        },
      }
    }
    </script>

    <template>
    <!-- component -->
<div class="flex h-screen items-center">
<div class="px-10 mx-auto container align-middle">
      <div class="grid grid-cols-2 gap-2">
        <div class="shadow rounded-lg py-3 px-5 bg-white">
          <div class="flex flex-row justify-between items-center">
            <div>
              <h6 class="text-2xl">Total de Leads</h6>
              <h4 class="text-black text-4xl font-bold text-left">10</h4>
            </div>
          </div>
          <div class="text-left flex flex-row justify-start items-center">
          </div>
        </div>
        <div class="shadow rounded-lg py-3 px-5 bg-white">
          <div class="flex flex-row justify-between items-center">
            <div>
              <h6 class="text-2xl">Total de Produtos</h6>
              <h4 class="text-black text-4xl font-bold text-left">41</h4>
            </div>
          </div>
          <div class="text-left flex flex-row justify-start items-center">
          </div>
        </div>
      </div>
    </div>
</div>
        </template>
    