<template>
    <div>
        <br><br><br>

       <v-card
    class="mx-auto"
    max-width="500"
  >
    

    <v-card-subtitle class="pb-0" justify="center"> <h2> Orion Concepts  </h2></v-card-subtitle>

     <v-form v-model="valid">
    <v-container>
      <v-row>
        <v-col cols="12" sm="6">
        <v-textarea
          label="First Name"
          auto-grow
          outlined
          rows="1"
          row-height="10"
        ></v-textarea>
      </v-col>

        <v-col cols="12" sm="6">
        <v-textarea
          label="Last Name"
          auto-grow
          outlined
          rows="1"
          row-height="10"
        ></v-textarea>
      </v-col>

       <v-col cols="12" sm="12">
        <v-textarea
          label="Email"
          :rules="[rules.email]"
          auto-grow
          outlined
          rows="1"
          row-height="10"
        ></v-textarea>
      </v-col>

      <v-col cols="9" sm="9">
        <v-textarea
          label="Password"
          
          :rules="[rules.password, rules.length(6)]"
          auto-grow
          outlined
          :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
            :type="show1 ? 'text' : 'password'"
            name="input-10-1"
            hint="At least 8 characters"
            counter
            @click:append="show1 = !show1"
          rows="1"
          row-height="10"
          
        ></v-textarea>
      </v-col>

     

      <v-col class="d-flex" cols="12" sm="12">
        <v-select

           v-model="e1"
          :items="states"
          label="Location"
          outlined
          prepend-icon="map"
        ></v-select>
      </v-col>


       <v-col cols="12" sm="12">
        <v-textarea
          label="Company"
          
          auto-grow
          outlined
          rows="1"
          row-height="10"
        ></v-textarea>
      </v-col>


       <v-col class="d-flex" cols="12" sm="6">
        <v-select

          
          :items="items"
          label="IM"
          outlined
         
        ></v-select>
      </v-col>

      <v-col cols="12" sm="6">
        <v-textarea
          label="IM Account"
         
          auto-grow
          outlined
          rows="1"
          row-height="10"
        ></v-textarea>
      </v-col>


      <v-col cols="12" sm="12">
        <v-textarea
          label="Phone"
          
          auto-grow
          outlined
          rows="1"
          row-height="10"
        ></v-textarea>
      </v-col>


      <v-col cols="12" sm="12">
        <v-textarea
          label="Website"
          
          auto-grow
          outlined
          rows="1"
          row-height="10"
        ></v-textarea>
      </v-col>


     <v-col cols="12">
            <v-checkbox
              v-model="form.terms"
              color="green"
            >
              <template v-slot:label>
                <div @click.stop="">
                  Do you accept the
                  <a href="javascript:;" @click.stop="terms = true">terms</a>
                  and
                  <a href="javascript:;" @click.stop="conditions = true">conditions?</a>
                </div>
              </template>
            </v-checkbox>
          </v-col>


      

        
      </v-row>
    </v-container>
  </v-form>

  <v-dialog v-model="terms" width="70%">
      <v-card>
        <v-card-title class="title">Terms</v-card-title>
        <v-card-text v-for="n in 5" :key="n">
          {{ content }}
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            text
            color="purple"
            @click="terms = false"
          >Ok</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
    <v-dialog v-model="conditions" width="70%">
      <v-card>
        <v-card-title class="title">Conditions</v-card-title>
        <v-card-text v-for="n in 5" :key="n">
          {{ content }}
        </v-card-text>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn
            text
            color="purple"
            @click="conditions = false"
          >Ok</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>

 
           <button type="button" id="login-button" class="btn btn-primary btn-block btn-flat">Publisher Signup</button>

    
  </v-card>
<br>
<br>
    </div>
</template>

<script>
export default {

  
    
    data: () => ({

   
      
      email: undefined,
      form: false,
       show1: false,
        show2: true,
        show3: false,
        show4: false,
        password: 'Password',
        terms: false,
        conditions: false,
        content: `Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue se`,
        
        

         items: ['Facebook', 'Linkdin', 'Twitter', 'Others'],

         dialog: false,

        e1: 'Florida',
        e2: 'Texas',
        e3: null,
        e4: null,
        
        states: [
          'Alabama', 'Alaska', 'American Samoa', 'Arizona',
          'Arkansas', 'California', 'Colorado', 'Connecticut',
          'Delaware', 'District of Columbia', 'Federated States of Micronesia',
          'Florida', 'Georgia', 'Guam', 'Hawaii', 'Idaho',
          'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky',
          'Louisiana', 'Maine', 'Marshall Islands', 'Maryland',
          'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi',
          'Missouri', 'Montana', 'Nebraska', 'Nevada',
          'New Hampshire', 'New Jersey', 'New Mexico', 'New York',
          'North Carolina', 'North Dakota', 'Northern Mariana Islands', 'Ohio',
          'Oklahoma', 'Oregon', 'Palau', 'Pennsylvania', 'Puerto Rico',
          'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee',
          'Texas', 'Utah', 'Vermont', 'Virgin Island', 'Virginia',
          'Washington', 'West Virginia', 'Wisconsin', 'Wyoming',
        ],

       
      
      
      phone: undefined,
      rules: {
        email: v => (v || '').match(/@/) || 'Please enter a valid email',
        length: len => v => (v || '').length >= len || `Invalid character length, required ${len}`,
        password: v => (v || '').match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/) ||
          'Password must contain an upper case letter, a numeric character, and a special character',
        required: v => !!v || 'This field is required',
      },

      
    }),

    

   
     
   
    

    
   
}
</script>

<style scoped>

</style>