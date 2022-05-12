<template>
  <v-card
          class="ma-2 "
          color=white
          light
          max-width="1700"
          width="510"
          height="500"
          
          >
            <div class="text-h3 font-weight-bold ml-1">
          ZADNJI TRENING  
          </div>
            <v-card
            class="my-5 mx-4"
              width="480"
              height="100"
              color="#EFEFEF"
              >
              <v-row
                align=start>
                <v-avatar
                  color="#2C6763"
                  size="56"
                  class="my-5 ml-8 mr-4"
                ></v-avatar>
              <v-col class="mr-3">
                  <div class="font-weight-bold" >
                    Vaja za celotno telo
                  </div>
                  <div color=#616161 class="mt-2">
                    180 Porabljenih kalorij | 20minut
                  </div>
                  <v-progress-linear 
                    rounded
                    class="mt-2"
                    value="25"
                    height=10
                    color="#2C6763">
                  </v-progress-linear>
              </v-col>
              </v-row>
            </v-card>
</template>

<script>
export default {

}
</script>

<style>

</style>