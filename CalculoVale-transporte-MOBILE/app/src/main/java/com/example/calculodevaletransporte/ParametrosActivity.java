package com.example.calculodevaletransporte;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class ParametrosActivity extends AppCompatActivity {

    private EditText edtValorTransporte, edtPercentual;
    private Button btnCancelar, btnConfirmar;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_parametros);

        edtValorTransporte = findViewById(R.id.edtValorPassagem);
        edtPercentual = findViewById(R.id.edtPercentual);

        btnCancelar = findViewById(R.id.btnCancelar);
        btnConfirmar = findViewById(R.id.btnConfirmar);

        btnCancelar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                setResult(0);
                finish();
            }
        });

        btnConfirmar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = getIntent();
                double vlrPassagem ;
                double percentual;

                vlrPassagem = TextUtils.isEmpty(edtValorTransporte.getText().toString()) ? 4.50 : Double.parseDouble(edtValorTransporte.getText().toString());
                percentual = TextUtils.isEmpty(edtValorTransporte.getText().toString()) ? 6 : Double.parseDouble(edtPercentual.getText().toString());

                if (vlrPassagem <= 0) {
                    Context context = getApplicationContext();
                    CharSequence text = "Valor da passagem deve ser maior que zero!";
                    Toast toast = Toast.makeText(context, text, Toast.LENGTH_SHORT);
                    toast.show();
                    return;
                } else if (percentual < 0) {
                    Context context = getApplicationContext();
                    CharSequence text = "Valor da passagem deve ser maior ou igual a que zero!";
                    Toast toast = Toast.makeText(context, text, Toast.LENGTH_SHORT);
                    toast.show();
                    return;
                } else {
                    intent.putExtra("vlrPassagem", vlrPassagem);
                    intent.putExtra("percentual", percentual);
                    setResult(1, intent);
                    finish();
                }
            }
        });
    }
}
