let bodyAudio = document.querySelector('body');

bodyAudio.onclick = () => {
    console.log('Hello2');
};


function setupSynth() {
    window.synth = new Tone.Synth({
      oscillator: {
        type: 'sine',
        modulationFrequency: 0.5
      },
      envelope: {
        attack: 0,
        decay: 0.2,
        sustain: 0,
        release: 0.5,
      }
    }).toMaster();
  }
  
  function boopMe() {
    if (!window.synth) {
      setupSynth();
    }
    
    window.synth.triggerAttackRelease(600, '9n');
  }
  
  bodyAudio.addEventListener('touchstart', function(e) {
    e.stopPropagation();
    e.preventDefault();
    boopMe();
  });
  bodyAudio.addEventListener('mousedown', boopMe);
  