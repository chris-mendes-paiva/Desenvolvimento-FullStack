package com.example.calculodevaletransporte;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Context;
import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.Gravity;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.TextView;
import android.widget.Toast;

public class MainActivity extends AppCompatActivity {

    private TextView txtNome, txtSalario, txtResultado;
    private EditText edtNome, edtSalario, edtNumDias;
    private RadioButton rdOpt01, rdOpt02, rdOpt03;
    private Button btnCalcular, btnParam;
    private double vlrPassagem, percentual;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        txtResultado = findViewById(R.id.txtResultado);

        edtNome = findViewById(R.id.edtNome);
        edtSalario = findViewById(R.id.edtSalario);
        edtNumDias = findViewById(R.id.edtNumDias);

        rdOpt01 = findViewById(R.id.rdOpt01);
        rdOpt02 = findViewById(R.id.rdOpt02);
        rdOpt03 = findViewById(R.id.rdOpt03);

        btnCalcular = findViewById(R.id.btnCalcular);
        btnParam = findViewById(R.id.btnParam);

        btnCalcular.setOnClickListener(clickCalcular);
        btnParam.setOnClickListener(clickParams);
    }

    View.OnClickListener clickCalcular = new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                int numPassagens;
                double vlrTotalDesconto, vlrMaxDesconto;
                String nome = edtNome.getText().toString();
                double vlrSalario = TextUtils.isEmpty(edtSalario.getText().toString()) ? 0.00 : Double.parseDouble(edtSalario.getText().toString());
                int numDias = TextUtils.isEmpty(edtNumDias.getText().toString()) ? 0 : Integer.parseInt(edtNumDias.getText().toString());

                if(TextUtils.isEmpty(nome)){
                    Context context = getApplicationContext();
                    CharSequence text = "O nome deve ser informado!";
                    Toast toast = Toast.makeText(MainActivity.this, text, Toast.LENGTH_SHORT);
                    toast.show();
                    return;
                }

                if(vlrSalario <= 0){
                    Context context = getApplicationContext();
                    CharSequence text = "Valor do salário deve ser maior que zero!";
                    Toast toast = Toast.makeText(context, text, Toast.LENGTH_SHORT);
                    toast.show();
                    return;
                }

                if(numDias <= 0){
                    Context context = getApplicationContext();
                    CharSequence text = "Quantidade de dias informados deve ser maior que zero!";
                    Toast toast = Toast.makeText(context, text, Toast.LENGTH_SHORT);
                    toast.show();
                    return;
                }

                if(vlrPassagem == 0 | TextUtils.isEmpty(Double.toString(vlrPassagem))){
                    vlrPassagem = 4.50;
                    CharSequence text = "Valor calculado com a passagem no valor de " + vlrPassagem;
                    Toast toast = Toast.makeText(MainActivity.this, text, Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();

                }

                if(percentual == 0 | TextUtils.isEmpty(Double.toString(percentual))){
                    percentual = 6;
                    CharSequence text = "Valor calculado com o percentual no valor de " + percentual;
                    Toast toast = Toast.makeText(MainActivity.this, text, Toast.LENGTH_SHORT);
                    toast.setGravity(Gravity.CENTER, 0, 0);
                    toast.show();
                }

                if(rdOpt01.isChecked() || rdOpt02.isChecked()){
                    numPassagens = 1;
                }else{
                    numPassagens = 2;
                }
                vlrMaxDesconto = numDias * (vlrPassagem * numPassagens);
                vlrTotalDesconto = (vlrSalario * percentual) / 100;

                if(vlrMaxDesconto > vlrTotalDesconto){
                    txtResultado.setText(Double.toString(vlrTotalDesconto));
                }else{
                    txtResultado.setText(Double.toString(vlrMaxDesconto));
                }

            }
        };

    View.OnClickListener clickParams = new View.OnClickListener() {
        @Override
        public void onClick(View v) {
            Intent intent = new Intent(MainActivity.this, ParametrosActivity.class);
            startActivityForResult(intent, 1000);
        }
    };

    @Override
    protected void onActivityResult(int requestCode, int resultCode, Intent data) {
        super.onActivityResult(requestCode, resultCode, data);
        if (requestCode == 1000) {
            vlrPassagem = data.getDoubleExtra("vlrPassagem",0);
            percentual = data.getDoubleExtra("passagem", 0);
        }
    }
}
