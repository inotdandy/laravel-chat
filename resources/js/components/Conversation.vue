<template>
  <div class="conversation">
    <h1>{{ contact ? contact.name : "Select a contact" }}</h1>
    <MessagesFeed :messages="messages" :contact="contact" />
    <MessageComposer @send="sendMessage" />
  </div>
</template>

<script>
import MessagesFeed from "./MessagesFeed";
import MessageComposer from "./MessageComposer";

export default {
  name: "Conversataion",
  components: {
    MessagesFeed,
    MessageComposer,
  },
  props: {
    contact: {
      type: Object,
      default: null,
    },
    messages: {
      type: Array,
      default: [],
    },
  },
  methods: {
    sendMessage(text) {
      console.log(text);
    },
  },
};
</script>

<style scoped>
.conversation {
  flex: 5;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.conversation h1{
  font-size: 20px;
  margin: 0;
  border-bottom: 1px dashed lightgray;
  padding: 10px;
}
</style>