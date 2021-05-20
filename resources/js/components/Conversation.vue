<template>
    <div class="conversation">
        <h1>{{ contact ? contact.name : 'Select a contact' }}</h1>
        <MessagesFeed :messages="messages" :contact="contact" />
        <MessageComposer @send="sendMessage"/>
    </div>
</template>

<script>
import MessagesFeed from './MessagesFeed';
import MessageComposer from './MessageComposer';

export default {
    name: "Conversataion",
    components: {
        MessagesFeed,
        MessageComposer
    },
    props: {
        contact: {
            type: Object,
            default: null
        },
        messages: {
            type: Array,
            default: []
        }
    },
    methods: {
        sendMessage(text){
            console.log(text);
        }
    }
}
</script>