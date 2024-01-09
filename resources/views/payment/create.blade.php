<x-layout title="Pagamento">
    <form action="{{ route('payment.store') }}" class="d-flex flex-column gap-4">
        <div class="d-flex flex-column gap-1">
            <label for="cardNumber" class="form-label">Numero do cartão</label>
            <input type="text" maxlength="16" placeholder="MasterCard/Santander/Inter" id="cardNumber" name="cardNumber" required>
        </div>
        <div class="d-flex flex-column gap-1">
            <label for="validateData" class="form-label">Data de Validade</label>
            <input type="text" placeholder="Inserir no formato: mes/ano" id="validateData" name="validateData" required>
        </div>
        <div class="d-flex flex-column gap-1">
            <label for="cvc" class="form-label">CVC</label>
            <input type="text" placeholder="Código CVC" id="cvc" name="cvc" required>
        </div>
        <input type="number" hidden id="user_id" name="user_id" value="0">
        <button type="submit" class="btn btn-primary">
            Finalizar Pagamento
        </button>
    </form>
</x-layout>
