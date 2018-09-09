<template>
   <div>
      <li v-for="iten in itens" :key="iten">
         <a >
            <span class="image"><img src="" alt="Profile Image" /></span>
            <span>
               <span>John Smith</span>
               <span class="time">{{iten + 3}} mins ago</span>
            </span>
            <span class="message">
               {{ iten }}
            </span>
         </a>
      </li> 
   </div>
</template>

<script>
export default {
   computed: {
      itens (){
         return [1,2,3,4,5,6,7,9,20,25];
      }
   }   
}
</script>
