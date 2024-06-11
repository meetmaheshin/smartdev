$(document).on('click', '.delete_wallet', function(e){
   
    var walletId = $(this).attr('data-id');
    var walletUrl = $(this).attr('data-url');

    SwalDelete(walletId,walletUrl);
    e.preventDefault();
});
$('.wallet_decision input[type=radio][name=network]').change(function() {
    $('#addmetamask').prop('checked', false);
});
$(function () {
    $('#walletName_tooltip').tooltip({trigger:'hover'})
});
$('#addmetamask').change(async function() {
    if(this.checked) {
        var network = $("input[name='network']:checked").val();
       
        if(network =='etherium'){
            var chainId = '0x5';
            var rpcUrl = 'https://goerli.infura.io/v3/';
            var nativeCurrency = 'GoerliETH';
            var chainName = 'Goerli test network';

        }else if(network =='binanace') {
            var chainId = '0x61';
            var rpcUrl = 'https://data-seed-prebsc-1-s1.binance.org:8545';
            var nativeCurrency = 'BNB' ;
            var chainName = 'Binance Smart Chain';
        }else{
            var chainId ='';
        }
	    const onboarding    = new MetamaskOnboarding()
       
        if (window.ethereum) {
            try {
                // check if the chain to connect to is installed
                await window.ethereum.request({
                    method: 'wallet_switchEthereumChain',
                    params: [{ chainId: chainId }], // chainId must be in hexadecimal numbers
                });
                window.ethereum.request({
                    method: "eth_requestAccounts"
                }).then((accounts) => {
                    $('#wallet_address').val(accounts[0]);
                }).catch((err) => console.log(err));
            
            }catch (error) {
                if (error.code === 4902) {
                    try {
                      await window.ethereum.request({
                        method: 'wallet_addEthereumChain',
                        params: [
                          {
                            chainId: chainId,
                            rpcUrls: [rpcUrl],
                            chainName:chainName,
                            nativeCurrency: {
                                name: chainName,
                                symbol:nativeCurrency, // 2-6 characters long
                                decimals: 18
                              },
                          },
                        ],
                      });
                    } catch (addError) {
                      console.error(addError);
                    }
                }
                console.log("Cannot switch to the network"+error);
            }
            
           
        }else {
            // if no window.ethereum then MetaMask is not installed
            var onboardButton = document.getElementById('addmetamask');
            onboardButton.disabled = true;
            onboardButton.checked = false;
            onboarding.startOnboarding();
           alert('MetaMask is not installed.');
        } 
    }
           
});

function SwalDelete(walletId,walletUrl){
  
    swal.fire({
     title: 'Are you sure?',
     text: "You won't be able to delete this!",
     type: 'warning',
     showCancelButton: true,
     confirmButtonColor: '#3085d6',
     cancelButtonColor: '#d33',
     confirmButtonText: 'Yes, delete it!',
    showLoaderOnConfirm: true,
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: walletUrl,
                type: "POST",
                data: {
                    id: walletId,
                },
                dataType: "json",
                success: function (response) {
                    swal.fire("Saved!", "", "success");
                    location.reload();
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    swal.fire(
                        "Error deleting!!",
                        "Please try again",
                        "error"
                    );
                },
            });
        } else if (result.isDenied) {
            swal.fire("Changes are not saved", "", "info");
        }
    });
    
}