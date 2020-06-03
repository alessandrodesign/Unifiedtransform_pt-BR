<?php

return [

     /*
     | ------------------------------------------------- -------------------------
     | Linhas de idioma de validação - por AlessandroDESIGN.com.br
     | ------------------------------------------------- -------------------------
     |
     | As seguintes linhas de idioma contêm as mensagens de erro padrão usadas pelo
     | a classe validadora. Algumas dessas regras têm várias versões, como
     | conforme as regras de tamanho. Sinta-se à vontade para ajustar cada uma dessas mensagens aqui.
     |
     */

    'accepted'             => 'O :attribute deve ser aceito.',
    'active_url'           => 'O :attribute não é um URL válido.',
    'after'                => 'O :attribute deve ser posterior à data :date.',
    'after_or_equal'       => 'O :attribute deve ser posterior ou igual a :date.',
    'alpha'                => 'O :attribute deve conter apenas letras.',
    'alpha_dash'           => 'O :attribute pode conter apenas letras, números e hífens.',
    'alpha_num'            => 'O :attribute pode conter apenas letras e números.',
    'array'                => 'O :attribute deve ser um arranjo.',
    'before'               => 'O :attribute deve ser uma data antes :date.',
    'before_or_equal'      => 'O :attribute deve ser uma data anterior ou igual a :date.',
    'between'              => [
        'numeric' => 'O :attribute deve estar entre :min e :max.',
        'file'    => 'O :attribute deve estar entre :min e :max kilobytes.',
        'string'  => 'O :attribute deve estar entre :min e :max caracteres.',
        'array'   => 'O :attribute deve estar entre :min e :max elementos.',
    ],
    'boolean'              => 'O :attribute deve ser verdadeiro ou falso.',
    'confirmed'            => 'O :attribute confirmação não corresponde.',
    'date'                 => 'O :attribute não é uma data válida.',
    'date_format'          => 'O :attribute não corresponde ao formato :format.',
    'different'            => 'O :attribute ey :other eles devem ser diferentes.',
    'digits'               => 'O :attribute deve ser de :digits digitos.',
    'digits_between'       => 'O :attribute deve ser entre :min e :max digitos.',
    'dimensions'           => 'O :attribute tem um tamanho de imagem inválido.',
    'distinct'             => 'O :attribute campo tem um valor duplicado.',
    'email'                => 'O :attribute deve ser um endereço de email válido.',
    'exists'               => 'O :attribute selecionado é inválido.',
    'file'                 => 'O :attribute deve ser um arquivo.',
    'filled'               => 'O :attribute deve ter um valor.',
    'image'                => 'O :attribute deve ser uma imagem.',
    'in'                   => 'O :attribute selecionado é inválido.',
    'in_array'             => 'O :attribute não existe em :other.',
    'integer'              => 'O :attribute deve ser um número inteiro.',
    'ip'                   => 'O :attribute deve ser um endereço IP válido.',
    'ipv4'                 => 'O :attribute deve ser um endereço IPv4 válido.',
    'ipv6'                 => 'O :attribute deve ser um endereço IPv6 válido.',
    'json'                 => 'O :attribute deve ser uma sequência JSON válida.',
    'max'                  => [
        'numeric' => 'O :attribute não pode ser maior que :max.',
        'file'    => 'O :attribute não pode ser maior que :max kilobytes.',
        'string'  => 'O :attribute não pode ser maior que :max caracteres.',
        'array'   => 'O :attribute no puede tener mas de :max elementos.',
    ],
    'mimes'                => 'O :attribute deve ser um arquivo de tipo: :values.',
    'mimetypes'            => 'O :attribute deve ser um arquivo do tipo: :values.',
    'min'                  => [
        'numeric' => 'O :attribute deve ser pelo menos de :min.',
        'file'    => 'O :attribute deve ser pelo menos de :min kilobytes.',
        'string'  => 'O :attribute deve ser pelo menos de :min caracteres.',
        'array'   => 'O :attribute deve ter pelo menos :min elementos.',
    ],
    'not_in'               => 'O :attribute selecionado é inválido.',
    'numeric'              => 'O :attribute deve ser um número.',
    'present'              => 'O :attribute deve estar presente.',
    'regex'                => 'O :attribute formato é inválido.',
    'required'             => 'O campo :attribute é requerido.',
    'required_if'          => 'O campo :attribute é requerido quando :other é :value.',
    'required_unless'      => 'O campo :attribute é requerido a menos que :other seja :values.',
    'required_with'        => 'O campo :attribute é requerido quando :values está presente.',
    'required_with_all'    => 'O campo :attribute é requerido quando :values está presente.',
    'required_without'     => 'O campo :attribute é requerido quando :values não está presente.',
    'required_without_all' => 'O campo :attribute é requerido quando nenhum dos :values estejam presentes.',
    'same'                 => 'O :attribute e :other devem combinar.',
    'size'                 => [
        'numeric' => 'O :attribute deve ser de :size.',
        'file'    => 'O :attribute deve ser de :size kilobytes.',
        'string'  => 'O :attribute deve ser de :size caracteres.',
        'array'   => 'O :attribute deve conter :size elementos.',
    ],
    'string'               => 'O :attribute deve ser uma string.',
    'timezone'             => 'O :attribute deve ser uma zona válida.',
    'unique'               => 'O :attribute já foi usado.',
    'uploaded'             => 'O :attribute gerou um falha ao enviar.',
    'url'                  => 'A :attribute é de um formató inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
