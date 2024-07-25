window.addEventListener('scroll', function () {
  let header = document.getElementById('header');
  let headerTitle = document.getElementById('header-title');
  if (window.scrollY > 0) {
    header.classList.add('bg-opacity-100');
    header.classList.remove('bg-opacity-0');
    headerTitle.classList.add('text-opacity-100');
    headerTitle.classList.remove('text-opacity-0');
  } else {
    header.classList.add('bg-opacity-0');
    header.classList.remove('bg-opacity-100');
    headerTitle.classList.add('text-opacity-0');
    headerTitle.classList.remove('text-opacity-100');
  }
});
