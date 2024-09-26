function clickRaid(element) {
  const liInner = element.closest("li");
  const bossList = liInner.querySelector("ul.boss-list");
  bossList.classList.toggle("active");
  liInner.classList.toggle("zoom");
}
