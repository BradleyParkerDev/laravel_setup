import confetti from "canvas-confetti";

const uiStore = () => ({
    navDrawerIsOpen: false,
    showRegistrationForm: false,
    deleteUserAccountModalIsOpen: false,
    theme: "",

    // Confetti Effect
    showConfettiEffect() {
        confetti({
            particleCount: 100,
            startVelocity: 30,
            spread: 360,
            origin: {
                x: Math.random(),
                y: Math.random() - 0.2,
            },
            zIndex: 100,
        });
    },

    toggleLoginAndRegistrationForms() {
        this.showRegistrationForm = !this.showRegistrationForm;
    },

    toggleNavDrawer() {
        this.navDrawerIsOpen = !this.navDrawerIsOpen;
    },
    closeModal() {
        this.deleteUserAccountModalIsOpen = false;
    },
    toggleDeleteUserAccountModal() {
        this.deleteUserAccountModalIsOpen = !this.deleteUserAccountModalIsOpen;
        console.log(
            `deleteUserAccountModalIsOpen: ${this.deleteUserAccountModalIsOpen}`,
        );
    },
});

export default uiStore;
