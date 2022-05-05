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

      <router-link to="/urnikvadbe">
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
         class="mx-auto mt-2"
         color="#ECECEC"
         light
         max-width="1700"
         width="1700"
         height="850"
         align=center
        >
        <v-row>
        <v-card
         class="ml-9 my-auto"
         color="#EFEFEF"
         light
         max-width="1700"
         width="530"
         height="800"
         align=center
        >
          <v-card
          class="ma-2"
          color=white
          light
          max-width="510"
          width="510"
          height="390"
          align=center
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
          class="ma-2"
          color=white
          light
          max-width="1700"
          width="510"
          height="380"
          align=center
          >
          </v-card>
      </v-card>
      <v-card
         class="mx-7 my-auto"
         color="#EFEFEF"
         light
         max-width="1700"
         width="530"
         height="800"
         align=center
        >
        <v-card
          class="ma-2"
          color=white
          light
          max-width="1700"
          width="510"
          height="500"
          align=center
          >
          </v-card>
          <v-card
          class="ma-2"
          color=white
          light
          max-width="1700"
          width="510"
          height="270"
          align=center
          >
          </v-card>
      </v-card>
      <v-card
         class="mr-9 my-9"
         color="#EFEFEF"
         light
         max-width="1700"
         width="530"
         height="800"
         align=center
        >
        <v-card
          class="ma-2"
          color=white
          light
          max-width="1700"
          width="510"
          height="190"
          align=center
          >
          </v-card>
          <v-card
          class="ma-2"
          color=white
          light
          max-width="1700"
          width="510"
          height="190"
          align=center
          >
          </v-card>
          <v-card
          class="ma-2"
          color=white
          light
          max-width="1700"
          width="510"
          height="380"
          align=center
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
