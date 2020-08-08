<template>
    <div class="row">
        <div class="messaging ">
            <div class="inbox_msg">
                <div class="mesgs">
                    <div class="msg_history" v-chat-scroll>
                        <div v-for="message in messages" :key="message.id">
                            <!-- ============================= -->
                            <div
                                class="incoming_msg"
                                v-if="user.id !== message.user.id"
                            >
                                <div class="incoming_msg_img">
                                    <img
                                        src="https://ptetutorials.com/images/user-profile.png"
                                        alt="{!! message.user.name !!}"
                                    />
                                </div>
                                <div class="received_msg">
                                    <div class="received_withd_msg">
                                        <p>{{ message.message }}</p>
                                        <span class="time_date">
                                            11:01 AM | June 9</span
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="outgoing_msg" v-else>
                                <div class="sent_msg">
                                    <p>{{ message.message }}</p>
                                    <span class="time_date">
                                        11:01 AM | June 9</span
                                    >
                                </div>
                            </div>
                            <!-- ====================================== -->
                        </div>
                    </div>

                    <div class="type_msg">
                        <div class="input_msg_write">
                            <input
                                @keyup.enter="sendMessage"
                                v-model="newMessage"
                                type="text"
                                class="write_msg"
                                name="message"
                                placeholder="Type a message"
                            />
                            <button class="msg_send_btn" type="button">
                                <span class="material-icons">
                                    send
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: ["painting", "user"],
    data() {
        return {
            messages: [],
            newMessage: ""
        };
    },
    mounted() {
        this.fetchMessages();

        Echo.join(`painting.${this.painting.id}.messages`).listen(
            "NewMessage",
            event => {
                this.messages.push(event.message);
            }
        );
    },
    methods: {
        fetchMessages() {
            axios
                .get(`/paintings/${this.painting.id}/messages`)
                .then(repsonse => {
                    this.messages = repsonse.data;
                });
        },
        sendMessage() {
            this.messages.push({
                user: this.user,
                message: this.newMessage
            });
            axios.post(`/paintings/${this.painting.id}/messages`, {
                message: this.newMessage
            });

            this.newMessage = "";
        }
    }
};
</script>
