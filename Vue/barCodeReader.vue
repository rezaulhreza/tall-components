/*****
* Can Also be used in Alpine with afew tweaks
*****/

scanBarcode() {
      // We need to use the vm variable to access the methods and data of the component. Otherwise, it will not work.
      const vm = this
      document.addEventListener('keydown', function(e) {
        const textInput = e.key
        const targetName = e.target.localName
        if (textInput && textInput.length === 1 && targetName !== 'input') {
          vm.barcodeString += textInput
        } else if (e.key === 'Enter') {

          //find the job with the barcode
          const macthedItem = vm.filteredCases.find(
            item => item.barcode === vm.barcodeString
          )
          if (matchedJob) {
            vm.selectedItem = matchedItem
          } else {
            window.alert('No item found for barcode: ' + vm.barcodeString);
            vm.selectedItem = null
          }
          vm.barcodeString = ''
        }
      })
    },
