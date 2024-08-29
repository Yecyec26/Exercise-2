document.querySelectorAll('.team-member').forEach(member => {
    member.addEventListener('mouseover', () => {
        const audio = member.querySelector('audio');
        if (audio) {
            audio.style.display = 'block';
        }
    });

    member.addEventListener('mouseout', () => {
        const audio = member.querySelector('audio');
        if (audio) {
            audio.style.display = 'none';
        }
    });
});
