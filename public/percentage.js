 // Get the input element
 const input = document.getElementById('percentage');

 // Get the percentage value from the input element
 const percentage = parseFloat(input.value);

 // Determine the color class, condition, and image source based on the percentage value
 let colorClass = 'text-green-500'; // Default to green
 let condition = 'Good'; // Default condition
 let imageSource = '/image/good.png'; // Default image source

 if (percentage >= 81 && percentage <= 100) {
   colorClass = 'text-red-500';
   condition = 'Alert';
   imageSource = '/image/alert.png';
 } else if (percentage >= 75 && percentage <= 80) {
   colorClass = 'text-yellow-500';
   condition = 'Neutral';
   imageSource = '/image/neutral.png';
 }

 // Add the color class to the input element
 input.classList.add(colorClass);

 // Get the condition element
 const conditionElement = document.getElementById('condition');

 // Add the color class to the condition element
 conditionElement.classList.add(colorClass);

 // Update the condition text content
 conditionElement.textContent = condition;

 // Get the condition image element
 const conditionImageElement = document.getElementById('conditionImage');

 // Set the image source
 conditionImageElement.src = imageSource;
 conditionImageElement.alt = condition;
