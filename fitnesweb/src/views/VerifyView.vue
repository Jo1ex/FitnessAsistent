<template>
  <v-app id="/verifikacija">
      
      <v-container class="fill-height" fluid>
        <v-row align="center" justify="center">
          <v-col cols="12" sm="8" md="8">
            
              <v-window v-model="step" align="center" justify="">
                <v-window-item :value="1">
                    <v-col cols="12" md="8">
                      <v-card-text class="mt-12">
                        <h1
                          color=#00A99D class="text-center display-2 teal--text text--accent-3">Verifikacija emaila</h1>
                        
                        <h4 class="text-center mt-15">Prosim preverite svoj email: mojmail@gmail.com za vašo verifikacijsko kodo, in jo vpišite odspodaj, da potrdite vaš email naslov.</h4>
                        <v-form>
                          <v-text-field outlined
                            label="Vpisite vaso verifikacijsko kodo*"
                            name="Verifikacija"
                            type="text"
                            color="teal accent-2"
                          />
                        <v-btn color="#00A99D" elevation="5" outlined x-large bold >Potrdite vaso kodo</v-btn>
                        </v-form>
                        <h4 class="text-left mt-4">Ponovno pošljemo potrditveno e-pošto? Ponovno poslji</h4>
                        <h4 class="text-left mt-6">Preverite ali je vas email naslov pravilen.</h4>
                        <h4 class="text-left mt-0">Preverite vašo nezaželeno pošto.</h4>
                        <h4 class="text-left mt-0">Poskusite uporabiti drugi email naslov če še ta vedno ne deluje.</h4>
                      </v-card-text>
                    </v-col>
                    
                </v-window-item>
                
              </v-window>
            
          </v-col>
        </v-row>
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