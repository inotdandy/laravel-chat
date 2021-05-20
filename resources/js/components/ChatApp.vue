<template>
    <div class="chat-app">
        <Conversation :contact="contact" :messages="messages" />
        <ContactList :contacts="contacts" />
    </div>
</template>

<script>
    import Conversation from './Conversation';
    import ContactList from './ContactList';

    export default {
        name: 'ChatApp',
        props: {
            user: {
                type: Object,
                required: true
            }
        },
        components: {
            Conversation,
            ContactList
        },
        data(){
            return{

                contact: null,
                messages: [],
                contacts: [],
            }
        },
        mounted() {
            console.log(this.user);
            axios.get('/contacts')
                .then((response) => {
                    console.log(response.data);
                    this.contacts = response.data;
                });
        }
    }
</script>
