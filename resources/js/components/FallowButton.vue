<template>
    <div>
        <button @click.prevent="fallowUser" class="btn btn-primary ml-4" v-text="buttonText">Fallow</button>
    </div>
</template>

<script>
    export default {
        props: ['userId','follows'],
        mounted() {
            console.log('Component mounted.')
        },

        data () {
            return {
                status: this.follows,
            };
        },

        methods: {
            fallowUser () {
                axios.post('/follow/' + this.userId)
                .then(response => {

                    this.status = ! this.status;
                    console.log(response);
                })
                .catch(errors => {
                    if (errors.response.status == 401) {
                        window.location = '/login';
                    }
                });
            }
        },

        computed: {
            buttonText () {
                return (this.status) ? 'Unfollow' : 'Follow';
            }
        }
    }
</script>
