const buttons = document.querySelectorAll("h2");
        const minValue = 0;
        const maxValue = 100;
        
        buttons.forEach((button) => {
          button.addEventListener("click", (event) => {
            // 1. Get the clicked element
            const element = event.currentTarget;
            // 2. Get the parent
            const parent = element.parentNode;
            // 3. Get the number (within the parent)
            const numberContainer = parent.querySelector("#myNumber");
            const number = parseFloat(numberContainer.textContent);
            // 4. Get the minus and plus buttons
            const increment = parent.querySelector(".plus");
            const decrement = parent.querySelector(".minus");
            // 5. Change the number based on click (either plus or minus)
            const newNumber = element.classList.contains("plus")
              ? number + 1
              : number - 1;
              if(newNumber<0){
              }else

            numberContainer.textContent = newNumber;
            console.log(newNumber);
          
          });
        });