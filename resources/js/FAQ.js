export const FAQ = () => {
    const FAQ = document.querySelector('.questions');
    let old_timestamp = null;
    if(FAQ) {
        FAQ.addEventListener('click', function(e) {
            // if(!(!e.detail || e.detail === 1)) return;
            
            // Waits for the animation to finish before running again
            if(!(old_timestamp == null || old_timestamp + 500 < e.timeStamp)) return
            old_timestamp = e.timeStamp;

            // Toggles classes
            if(!(e.target.matches('.fas') || e.target.matches('.arrow-button'))) return
            else {
                const answer = e.target.closest('.question').querySelector('.answer');
                const icon = e.target.closest('.question').querySelector('.arrow-button');

                if(!answer.classList.contains('active')) {
                    answer.classList.add('active');
                    icon.classList.add('active')
                } else {
                    answer.classList.remove('active');
                    icon.classList.remove('active')
                }
            }
        })
    }
}

// Exporting individual features
// export let name1, name2, …, nameN; // also var, const
// export let name1 = …, name2 = …, …, nameN; // also var, const
// export function functionName(){...}
// export class ClassName {...}