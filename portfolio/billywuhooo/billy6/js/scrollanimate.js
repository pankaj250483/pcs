const observer1 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square1 = entry.target.querySelector('.square1');
  
      if (entry.isIntersecting) {
        square1.classList.add('animate__backInDown');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      square1.classList.remove('animate__backInDown');
    });
  });
  
  observer1.observe(document.querySelector('.square-wrapper1'));
 
  /* ===================================================================  */

  const observer2 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square2 = entry.target.querySelector('.square2');
  
      if (entry.isIntersecting) {
        square2.classList.add('animate__backInLeft');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      square2.classList.remove('animate__backInLeft');
    });
  });
  
  observer2.observe(document.querySelector('.square-wrapper2'));

 /* ===================================================================  */

  const observer3 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square3 = entry.target.querySelector('.square3');
  
      if (entry.isIntersecting) {
        square3.classList.add('animate__backInRight');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      square3.classList.remove('animate__backInRight');
    });
  });
  
  observer3.observe(document.querySelector('.square-wrapper3'));

   /* ===================================================================  */

   const observer4 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square4 = entry.target.querySelector('.square4');
  
      if (entry.isIntersecting) {
        square4.classList.add('animate__shakeY');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      square4.classList.remove('animate__shakeY');
    });
  });
  
  observer4.observe(document.querySelector('.square-wrapper4'));
  

   /* ===================================================================  */

   const observer5 = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const square5 = entry.target.querySelector('.square5');
  
      if (entry.isIntersecting) {
        square5.classList.add('animate__backInUp');
        return; // if we added the class, exit the function
      }
  
      // We're not intersecting, so remove the class!
      square5.classList.remove('animate__backInUp');
    });
  });
  
  observer5.observe(document.querySelector('.square-wrapper5'));