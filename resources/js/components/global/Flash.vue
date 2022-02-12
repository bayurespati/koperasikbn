<template>
  <transition
    enterActiveClass="fade-in"
    leaveActiveClass="fade-out"
    mode="out-in"
  >
    <!--=========================================================================================
        N O T I F I C A T I O N S   W R A P P E R
    ==========================================================================================-->

    <div class="notification-wrapper" v-if="notificationExists">
      <transition-group
        enterActiveClass="fade-in-down"
        leaveActiveClass="fade-out"
        mode="out-in"
      >
        <!--=========================================================================================
            I N D I V I D U A L   N O T I F I C A T I O N
        ==========================================================================================-->
        <div
          v-for="(notification, index) in notifications"
          class="alert alert-contrast alert-position"
          :class="notification.alertClass"
          :style="getBottomPosition(index)"
          :key="notification.key"
        >
          <!--=========================================================================================
             N O T I F I C A T I O N   B O D Y
          ==========================================================================================-->
          <div class="message">
            <div class="close" @click="hide(0, index)">
              <span aria-hidden="true" class="s7-close"></span>
            </div>
            {{ notification.body }}
          </div>
        </div>
      </transition-group>
    </div>
  </transition>
</template>

<script>
export default {
  data() {
    return {
      notifications: [],
    };
  },

  created() {
    window.events.$on("flash", (message, type) => {
      this.flash(message, type, 3500);
    });
  },

  computed: {
    notificationExists() {
      return this.notifications.length > 0;
    },

    key() {
      return Math.random();
    },
  },

  methods: {
    flash(message, type = "success", duration = 3500) {
      if (this.notifications.length === 8) {
        this.hide(0);
      }

      this.display(message, type);

      this.hide(duration);
    },

    display(message, type) {
      this.notifications.push({
        key: Math.random(),
        body: message,
        type: type,
        alertClass: this.getAlertClass(type),
        alertIcon: this.getAlertIcon(type),
      });
    },

    hide(duration, index = 0) {
      setTimeout(() => {
        this.notifications.splice(index, 1);
      }, duration);
    },

    getAlertClass(type) {
      return "alert-" + type;
    },

    getAlertIcon(type) {
      if (type === "success") {
        return "mdi-alert-circle";
      } else if (type === "danger") {
        return "mdi-alert-circle";
      } else if (type === "info") {
        return "mdi-alert-circle";
      } else if (type === "warning") {
        return "mdi-alert-circle";
      } else {
        return "";
      }
    },

    getBottomPosition(index) {
      const margin = 10;
      const notificationHeight = 60;

      return {
        bottom: margin * (index + 1) + notificationHeight * index + "px",
      };
    },
  },
};
</script>


<style scoped>
.notification-wrapper {
  position: fixed;
  right: 0;
  z-index: 1100 !important;
  bottom: 160px;
}

.alert-position {
  position: fixed;
  right: 25px;
}

.alert-contrast {
  padding-right: 30px;
}
</style>