<template>
  <div class="chat-app">
    <Conversation :contact="selectedContact" :messages="messages" />
    <ContactList
      :contacts="contacts"
      @selectedContact="startConversationWith"
    />
  </div>
</template>

<script>
import Conversation from "./Conversation";
import ContactList from "./ContactList";

export default {
  name: "ChatApp",
  props: {
    user: {
      type: Object,
      required: true,
    },
  },
  components: {
    Conversation,
    ContactList,
  },
  data() {
    return {
      selectedContact: null,
      messages: [],
      contacts: [],
    };
  },
  mounted() {
    axios.get("/contacts").then((response) => {
      console.log(response.data);
      this.contacts = response.data;
    });
  },
  methods: {
    startConversationWith(contact) {
      axios.get(`/contacts/${contact.id}`).then((response) => {
        this.selectedContact = contact;
        this.messages = response.data;
      });
    },
  },
};
</script>

<style scoped>
.chat-app {
  display: flex;
}
</style>