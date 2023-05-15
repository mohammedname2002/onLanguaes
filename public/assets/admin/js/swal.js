const script = document.createElement('script');
script.src = '//cdn.jsdelivr.net/npm/sweetalert2@11';
script.defer = true; // defer the script execution until the document has finished parsing
document.body.appendChild(script);

function JSconfirm(event,id){
    event.preventDefault();
        Swal.fire({
  title: 'هل أنت متأكد من عملية الحذف؟',
  text: "سوف يتم حذف البيانات المتعلقة كاملة",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#0a1832',
  cancelButtonColor: '#d33',
  confirmButtonText: 'نعم متأكد',
  cancelButtonText: 'لا',
}).then((result) => {
  if (result.isConfirmed) {
      $('#deleteform'+id).submit();
  }
})
    }
