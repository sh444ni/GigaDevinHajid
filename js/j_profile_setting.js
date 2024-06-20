// Ambil elemen tombol "Save Changes"
const saveChangesBtn = document.getElementById('saveChangesBtn');

// Tambahkan event listener pada tombol "Save Changes"
saveChangesBtn.addEventListener('click', (event) => {
  event.preventDefault(); // Mencegah pengiriman formulir secara default

  // Ambil nilai dari input formulir
  const longName = document.getElementById('long-name').value;
  const email = document.getElementById('email').value;
  const bio = document.getElementById('bio').value;

  // Simpan data ke localStorage
  localStorage.setItem('longName', longName);
  localStorage.setItem('email', email);
  localStorage.setItem('bio', bio);

  // Redirect ke halaman s_profile.html
  window.location.href = 's_profile.html';
});

// Fungsi untuk mengambil data dari localStorage dan mengisi elemen HTML
function populateProfileData() {
  const longNameElement = document.querySelector('.profile-info p:nth-child(2)');
  const emailElement = document.querySelector('.profile-info p:nth-child(4)');
  const bioElement = document.querySelector('.profile-info p:nth-child(6)');

  const longName = localStorage.getItem('longName');
  const email = localStorage.getItem('email');
  const bio = localStorage.getItem('bio');

  longNameElement.textContent = longName || 'John Doe';
  emailElement.textContent = email || 'john.doe@example.com';
  bioElement.textContent = bio || 'Saya adalah seorang pengembang perangkat lunak yang antusias.';
}

// Panggil fungsi populateProfileData saat halaman dimuat
window.addEventListener('load', populateProfileData);