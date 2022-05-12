<template>
  <v-app id="/reg">  
    <v-toolbar 
    dense
    color="#009999"
    dark
    >
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/listasporocil">
        <v-icon>mdi-send-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/nastavitve">
        <v-icon>mdi-cog-outline</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-plus-box-outline</v-icon>
      </router-link>
      <v-spacer></v-spacer>
      
      <v-toolbar-title>STATUS AKTIVNOSTI</v-toolbar-title>

      <v-spacer></v-spacer>

      <router-link to="/statusaktivnosti">
        <v-icon>mdi-account-circle</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikvadbe">
        <v-icon>mdi-calendar</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <router-link to="/urnikprehrane">
        <v-icon>mdi-format-align-justify</v-icon>
      </router-link>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </v-toolbar>
    <v-container class="fill-height" fluid>
                
      <v-card
         class="mx-auto mt-2 align-center"

         color="#ECECEC"
         light
         max-width="1700"
         width="1700"
         height="850" 
        >
        <v-row>
        <v-card
         class="ml-9 my-auto align-center"
         color="#EFEFEF"
         light
         max-width="1700"
         width="530"
         height="800"
        >
          <v-card
          class="ma-2 align-center"
          color=white
          light
          max-width="510"
          width="510"
          height="390"
          >
          <v-card-title>
      
      
        <div class="text-h3 font-weight-bold">
          SRCNI UTRIP  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>
        <div>
          <span
            class="text-h3 font-weight-bold"
            v-text="avg || '—'"
          ></span>
          <strong v-if="avg">BPM</strong>
        </div>
    

      <v-spacer></v-spacer>

    </v-card-title>

    <v-sheet color="transparent">
      <v-sparkline
        :key="String(avg)"
        :smooth="0"
        :gradient="['#009999', '#2C6763']"
        :line-width="3"
        :value="heartbeats"
        auto-draw
        stroke-linecap="round"
      ></v-sparkline>
    </v-sheet>
          </v-card>
          <v-card
          class="ma-2 align-center"
          color=white
          light
          max-width="1700"
          width="510"
          height="380"
          >
          </v-card>
      </v-card>
        <v-card
         class="mx-7 my-auto align-center"
         color="#EFEFEF"
         light
         max-width="1700"
         width="530"
         height="800"
         >

          <v-card
          class="ma-2 "
          color=white
          light
          max-width="1700"
          width="510"
          height="500"

          >
            <div class="text-h3 font-weight-bold ml-5 mt-2">
          ZADNJI TRENING  
          </div>
            <v-card
            class="my-10 mx-4"
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
            <v-card
            class="my-10 mx-4"
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
                    Vaja za spodnji del telesa
                  </div>
                  <div color=#616161 class="mt-2">
                    200 Porabljenih kalorij | 30minut
                  </div>
                  <v-progress-linear 
                    rounded
                    class="mt-2"
                    value="60"
                    height=10
                    color="#2C6763">
                  </v-progress-linear>
              </v-col>
              </v-row>
            </v-card>
            <v-card
              class="my-10 mx-4"
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
                    Vaja za tebušne mišice
                  </div>
                  <div color=#616161 class="mt-2">
                    180 Porabljenih kalorij | 20minut                  
                  </div>
                  <v-progress-linear 
                    rounded
                    class="mt-2"
                    value="40"
                    height=10
                    color="#2C6763">
                  </v-progress-linear>
              </v-col>
              </v-row>
            </v-card>
          </v-card>
        
          <v-card
          class="ma-2 align-center"

          color=white
          light
          max-width="510"
          width="510"
          height="270"
          >
          <div class="text-h3 font-weight-bold ml-5">
          NAREJENI KORAKI  &nbsp;&nbsp;&nbsp;&nbsp;
          </div>
        <v-row class="mt-10 ml-5">
        <v-icon 
        class="align-center"
        size="100"
        >mdi-shoe-print
        </v-icon>
          <div class="text-h3 font-weight-black">
          &nbsp;&nbsp;&nbsp;&nbsp;7000/10000
          <v-progress-linear 
                    rounded
                    class="mt-2"
                    value="70"
                    height=15
                    color="#2C6763">
                  </v-progress-linear>
        </div>
        </v-row>
          </v-card>
      </v-card>
      <v-card
         class="mr-9 my-9 align-center"
         color="#EFEFEF"
         light
         max-width="1700"
         width="530"
         height="800"
        >
        <v-card
          class="ma-2 align-start"
          color=white
          light
          max-width="510"
          width="510"
          height="190"
          
          >
          <div class="text-h3 font-weight-bold ml-5" >
          CAS SPANJA &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          <v-card-text
            class="text-h4 font-weight-medium align-center ml-5"
            color="#00A99D"
            >
          8h 20m &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <v-icon size=100 class="ml-15" color="#00A99D">mdi-sleep</v-icon>
          </v-card-text>
          </v-card>

          <v-card
          class="ma-2 align-center"
          color=white
          light
          max-width="510"
          width="510"
          height="190"
          >

          <div class="text-h3 font-weight-bold align-start ml-5" >
            KALORIJE  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </div>
          
          <v-row>
            <v-col>
              <v-card-text
              class="text-h4 font-weight-medium align-center ml-5"
              color="#00A99D"
              >
              760kCal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              </v-card-text>
            </v-col>
            <v-col>
              <v-progress-circular 
                :value="80"
                :size="110"
                :width="10"
                color="teal"
                >240kCal left</v-progress-circular>
              </v-col>
            </v-row>
          </v-card>
          
          <v-card
          class="ma-2 align-center"
          color=white
          light
          max-width="1700"
          width="510"
          height="380"
          >
            
          </v-card>
      
      </v-card>
      </v-row>
      </v-card>
                    
    </v-container>
  </v-app>
</template>

<script>
export default {
  data: () => ({
    step: 1
  }),
  props: {
    source: String
  }
};

</script>
<script>
  const exhale = ms =>
    new Promise(resolve => setTimeout(resolve, ms))

  export default {
    data: () => ({
      checking: false,
      heartbeats: [],
    }),

    computed: {
      avg () {
        const sum = this.heartbeats.reduce((acc, cur) => acc + cur, 0)
        const length = this.heartbeats.length

        if (!sum && !length) return 0

        return Math.ceil(sum / length)
      },
    },

    created () {
      this.takePulse(false)
    },

    methods: {
      heartbeat () {
        return Math.ceil(Math.random() * (120 - 80) + 80)
      },
      async takePulse (inhale = true) {
        this.checking = true

        inhale && await exhale(1000)

        this.heartbeats = Array.from({ length: 20 }, this.heartbeat)

        this.checking = false
      },
    },
  }
</script>

