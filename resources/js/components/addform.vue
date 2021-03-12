<template>
    <v-app>
        <v-tabs color="deep-purple accent-4" right>
            <v-tab>Staff</v-tab>
            <v-tab>Professionnels de la santé</v-tab>
            <v-tab-item>
                <v-container fluid>
                    <v-form  ref="form" v-model="validform1" lazy-validation>
                        <v-card v-for="(compte , index) in comptesStaff" :key="index" width="100%">
                            <v-card-title>
                                <span class="float-right">
                                        <v-btn color="error" fab x-small dark @click='supStaff(index)'>
                                            <b>-</b>
                                        </v-btn>
                                </span>
                            </v-card-title>
                            <v-card-text>
                            <v-row>
                                <v-col cols="12" md="3" sm="6">
                                    <v-select
                                    v-model="compte.statut"
                                    :items="items"
                                    :rules="[v => !!v || 'statut vide']"
                                    label="Statut*"
                                    required
                                    ></v-select>
                                </v-col>
                                <v-col cols="12"  md="3" sm="6">
                                    <v-text-field label="Nom*"
                                    v-model='compte.nom'
                                    counter="250"
                                    :rules="[v => !!v || 'nom vide',v => v.length <= 250 || 'Max 250 characters']"
                                    required
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="12"  md="3" sm="6">
                                    <v-text-field label="prenom*"
                                    v-model='compte.prenom'
                                    counter="250"
                                    :rules="[v => !!v || 'prenom vide',v => v.length <= 250 || 'Max 250 characters']"
                                    required
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="12"  md="3" sm="6">
                                    <v-text-field label="Departement*"
                                    v-model='compte.nom'
                                    counter="250"
                                    :rules="[v => !!v || 'Departement vide',v => v.length <= 250 || 'Max 250 characters']"
                                    required
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col cols="12"  md="4" sm="12">
                                    <v-text-field label="Email*"
                                    v-model='compte.email'
                                    counter="250"
                                    :rules="emailRules"
                                    required
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="12"  md="4" sm="6">
                                    <v-text-field label="Ville*"
                                    v-model='compte.ville'
                                    counter="250"
                                    :rules="[v => !!v || 'ville vide',v => v.length <= 250 || 'Max 250 characters']"
                                    required
                                    ></v-text-field>
                                </v-col>
                                <v-col cols="12"  md="4" sm="6">
                                    <v-text-field label="Gsm*"
                                    v-model='compte.gsm'
                                    counter="250"
                                    :rules="[v => !!v || 'gsm vide',v => v.length <= 250 || 'Max 250 characters']"
                                    required
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            <v-row>
                                <v-col>
                                    <v-text-field label="Adress*"
                                    v-model='compte.adress'
                                    counter="250"
                                    :rules="[v => !!v || 'adress vide',v => v.length <= 250 || 'Max 250 characters']"
                                    required
                                    ></v-text-field>
                                </v-col>
                            </v-row>
                            </v-card-text>
                         <v-divider></v-divider>
                        </v-card>
                        <v-btn :disabled="!validform1" color="success" class="mr-4" @click="validateStaff" >
                          Enregistrer
                        </v-btn>
                        <v-btn tile color="success" @click='ajouterStaff'>
                            Ajouter User
                        </v-btn>
                    </v-form>
                </v-container>
            </v-tab-item>
            <v-tab-item>
                <v-container fluid>
                <v-row>
                    2
                </v-row>
                </v-container>
            </v-tab-item>
        </v-tabs>
    </v-app>
</template>

<script>
    export default {
        data() {
            return {
               user:[],
               msg:'',
               validform1:true,
               emailRules: [
                    v => !!v || 'E-mail vide',
                    v => /.+@.+\..+/.test(v) || 'Email doit être valide',
                ],
               items: [
                    'Dr',
                    'Pr',
                    'Staff',
                ],
               comptesStaff :[
                    {
                        statut:'',
                        nom:'',
                        prenom:'',
                        departement:'',
                        adress:'',
                        ville:'',
                        gsm:'',
                        email:'',
                    }
                ],
                comptesProf :[
                    {
                        statut:'',
                        nom:'',
                        prenom:'',
                        specialite:'',
                        secteur:'',
                        adress:'',
                        pays:'',
                        ville:'',
                        gsm:'',
                        email:'',
                    }
                ]
            }
        },
        methods: {
            ajouterStaff(){
            this.comptesStaff.push({
                statut:'',
                nom:'',
                prenom:'',
                departement:'',
                adress:'',
                ville:'',
                gsm:'',
                email:'',
            })

           },
           supStaff(index){
            this.comptesStaff.splice(index,1)
           },
           validateStaff () {
               console.log(this.user.id)
               this.comptesStaff.forEach((c)=>{
                    c.user_id = this.user.id;
                })
               axios.post('addNewComptes', {'staffcomptes':this.comptesStaff }).then((res)=>{
                   if(res){
                       this.msg = res.data
                        var regex = /'[\w\.-]+@[\w\.-]+'/g; // The actual regex
                        var matches = regex.exec(this.msg);
                        console.log(matches[0]);
                       window.alert(matches[0]);
                   }
                   else{
                       this.$refs.form.validate()
                   }
               })
            },
        },
        created() {
             axios.get('getuser').then((res) =>{ this.user = res.data
           console.log(this.user)
          })
        }
    }
</script>
