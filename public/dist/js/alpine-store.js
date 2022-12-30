Alpine.store("sidebar", {
  openIs: true,
  toggle() {
    this.openIs = !this.openIs;
  },
});
