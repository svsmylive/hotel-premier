const initSelectOptions = () => {
  const selectOption = document.querySelector('.select-option');
  const selectedItem = selectOption.querySelector('.select-option-selected');
  selectedItem.addEventListener('click', () => {
    selectOption.classList.toggle('active');
  });
  const variants = selectOption.querySelectorAll('.select-option-variants > div');
  variants.forEach(variant => {
    variant.addEventListener('click', () => {
      selectOption.classList.toggle('active');
      selectedItem.querySelector('.select-option-selected__text').textContent = variant.textContent;
      variants.forEach(_variant => _variant.classList.remove('active'));
      variant.classList.add('active');
    });
  });
};

initSelectOptions();
