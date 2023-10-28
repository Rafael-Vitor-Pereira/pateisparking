<script>
    document.addEventListener('livewire:initialized', () => {
        Livewire.on("ExibirToast", (mensagem) => {
            Toastify({
                text: mensagem,
                duration: 3000,
                gravity: "top",
                position: "center",
                stopOnFocus: true,
                style: {
                    background: "#CCFBF1",
                    borderTop: "4px solid #14B8A6",
                    color: "#124E4A",
                }
            }).showToast();
        });
    });
</script>

{{-- Mensagem da sessão --}}
@if(session()->has('mensagem'))
    <script>
        Livewire.dispatch('ExibirToast', "{{session('mensagem')}}");
    </script>
@endif
