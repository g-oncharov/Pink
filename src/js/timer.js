let timeNode = document.getElementById('time-node');

function getCurrentTimeString() {
  return new Date().toTimeString().replace(/ .*/, '');
}

timeNode.innerHTML = getCurrentTimeString();
setInterval(
  () => timeNode.innerHTML = getCurrentTimeString(),
  1000
);
