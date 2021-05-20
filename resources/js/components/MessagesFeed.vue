<template>
    <div class="feed">
        <ul>
            <li v-for="message in messages" :class="`message${message.to == contact.id ? 'sent' : 'received'}`" :key="message.id">
                <div class="text">
                    {{ message.text }}
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: {
        messages: {
            type: Array,
            default: []
        },
        contact: {
            type: Object
        }
    }
}
</script>