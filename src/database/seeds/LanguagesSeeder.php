<?php

namespace interactivesolutions\honeycomblanguages\database\seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use interactivesolutions\honeycomblanguages\app\models\HCLanguages;
use League\Flysystem\Exception;

class LanguagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $list = [
            ["language_family" => "Northwest Caucasian", "language" => "Abkhaz", "native_name" => "аҧсуа бызшәа, аҧсшәа", "iso_639_1" => "ab", "iso_639_2" => "abk"],
            ["language_family" => "Afro-Asiatic", "language" => "Afar", "native_name" => "Afaraf", "iso_639_1" => "aa", "iso_639_2" => "aar"],
            ["language_family" => "Indo-European", "language" => "Afrikaans", "native_name" => "Afrikaans", "iso_639_1" => "af", "iso_639_2" => "afr"],
            ["language_family" => "Niger–Congo", "language" => "Akan", "native_name" => "Akan", "iso_639_1" => "ak", "iso_639_2" => "aka"],
            ["language_family" => "Indo-European", "language" => "Albanian", "native_name" => "gjuha shqipe", "iso_639_1" => "sq", "iso_639_2" => "sqi"],
            ["language_family" => "Afro-Asiatic", "language" => "Amharic", "native_name" => "አማርኛ", "iso_639_1" => "am", "iso_639_2" => "amh"],
            ["language_family" => "Afro-Asiatic", "language" => "Arabic", "native_name" => "العربية", "iso_639_1" => "ar", "iso_639_2" => "ara"],
            ["language_family" => "Indo-European", "language" => "Aragonese", "native_name" => "aragonés", "iso_639_1" => "an", "iso_639_2" => "arg"],
            ["language_family" => "Indo-European", "language" => "Armenian", "native_name" => "Հայերեն", "iso_639_1" => "hy", "iso_639_2" => "hye"],
            ["language_family" => "Indo-European", "language" => "Assamese", "native_name" => "অসমীয়া", "iso_639_1" => "as", "iso_639_2" => "asm"],
            ["language_family" => "Northeast Caucasian", "language" => "Avaric", "native_name" => "авар мацӀ, магӀарул мацӀ", "iso_639_1" => "av", "iso_639_2" => "ava"],
            ["language_family" => "Indo-European", "language" => "Avestan", "native_name" => "avesta", "iso_639_1" => "ae", "iso_639_2" => "ave"],
            ["language_family" => "Aymaran", "language" => "Aymara", "native_name" => "aymar aru", "iso_639_1" => "ay", "iso_639_2" => "aym"],
            ["language_family" => "Turkic", "language" => "Azerbaijani", "native_name" => "azərbaycan dili", "iso_639_1" => "az", "iso_639_2" => "aze"],
            ["language_family" => "Niger–Congo", "language" => "Bambara", "native_name" => "bamanankan", "iso_639_1" => "bm", "iso_639_2" => "bam"],
            ["language_family" => "Turkic", "language" => "Bashkir", "native_name" => "башҡорт теле", "iso_639_1" => "ba", "iso_639_2" => "bak"],
            ["language_family" => "Language isolate", "language" => "Basque", "native_name" => "euskara, euskera", "iso_639_1" => "eu", "iso_639_2" => "eus"],
            ["language_family" => "Indo-European", "language" => "Belarusian", "native_name" => "беларуская мова", "iso_639_1" => "be", "iso_639_2" => "bel"],
            ["language_family" => "Indo-European", "language" => "Bengali; Bangla", "native_name" => "বাংলা", "iso_639_1" => "bn", "iso_639_2" => "ben"],
            ["language_family" => "Indo-European", "language" => "Bihari", "native_name" => "भोजपुरी", "iso_639_1" => "bh", "iso_639_2" => "bih"],
            ["language_family" => "Creole", "language" => "Bislama", "native_name" => "Bislama", "iso_639_1" => "bi", "iso_639_2" => "bis"],
            ["language_family" => "Indo-European", "language" => "Bosnian", "native_name" => "bosanski jezik", "iso_639_1" => "bs", "iso_639_2" => "bos"],
            ["language_family" => "Indo-European", "language" => "Breton", "native_name" => "brezhoneg", "iso_639_1" => "br", "iso_639_2" => "bre"],
            ["language_family" => "Indo-European", "language" => "Bulgarian", "native_name" => "български език", "iso_639_1" => "bg", "iso_639_2" => "bul"],
            ["language_family" => "Sino-Tibetan", "language" => "Burmese", "native_name" => "ဗမာစာ", "iso_639_1" => "my", "iso_639_2" => "mya"],
            ["language_family" => "Indo-European", "language" => "Catalan; Valencian", "native_name" => "català, valencià", "iso_639_1" => "ca", "iso_639_2" => "cat"],
            ["language_family" => "Austronesian", "language" => "Chamorro", "native_name" => "Chamoru", "iso_639_1" => "ch", "iso_639_2" => "cha"],
            ["language_family" => "Northeast Caucasian", "language" => "Chechen", "native_name" => "нохчийн мотт", "iso_639_1" => "ce", "iso_639_2" => "che"],
            ["language_family" => "Niger–Congo", "language" => "Chichewa; Chewa; Nyanja", "native_name" => "chiCheŵa, chinyanja", "iso_639_1" => "ny", "iso_639_2" => "nya"],
            ["language_family" => "Sino-Tibetan", "language" => "Chinese", "native_name" => "中文 (Zhōngwén), 汉语, 漢語", "iso_639_1" => "zh", "iso_639_2" => "zho"],
            ["language_family" => "Turkic", "language" => "Chuvash", "native_name" => "чӑваш чӗлхи", "iso_639_1" => "cv", "iso_639_2" => "chv"],
            ["language_family" => "Indo-European", "language" => "Cornish", "native_name" => "Kernewek", "iso_639_1" => "kw", "iso_639_2" => "cor"],
            ["language_family" => "Indo-European", "language" => "Corsican", "native_name" => "corsu, lingua corsa", "iso_639_1" => "co", "iso_639_2" => "cos"],
            ["language_family" => "Algonquian", "language" => "Cree", "native_name" => "ᓀᐦᐃᔭᐍᐏᐣ", "iso_639_1" => "cr", "iso_639_2" => "cre"],
            ["language_family" => "Indo-European", "language" => "Croatian", "native_name" => "hrvatski jezik", "iso_639_1" => "hr", "iso_639_2" => "hrv"],
            ["language_family" => "Indo-European", "language" => "Czech", "native_name" => "čeština, český jazyk", "iso_639_1" => "cs", "iso_639_2" => "ces"],
            ["language_family" => "Indo-European", "language" => "Danish", "native_name" => "dansk", "iso_639_1" => "da", "iso_639_2" => "dan"],
            ["language_family" => "Indo-European", "language" => "Divehi; Dhivehi; Maldivian;", "native_name" => "ދިވެހި", "iso_639_1" => "dv", "iso_639_2" => "div"],
            ["language_family" => "Indo-European", "language" => "Dutch", "native_name" => "Nederlands, Vlaams", "iso_639_1" => "nl", "iso_639_2" => "nld"],
            ["language_family" => "Sino-Tibetan", "language" => "Dzongkha", "native_name" => "རྫོང་ཁ", "iso_639_1" => "dz", "iso_639_2" => "dzo"],
            ["language_family" => "Indo-European", "language" => "English", "native_name" => "English", "iso_639_1" => "en", "iso_639_2" => "eng"],
            ["language_family" => "Constructed", "language" => "Esperanto", "native_name" => "Esperanto", "iso_639_1" => "eo", "iso_639_2" => "epo"],
            ["language_family" => "Uralic", "language" => "Estonian", "native_name" => "eesti, eesti keel", "iso_639_1" => "et", "iso_639_2" => "est"],
            ["language_family" => "Niger–Congo", "language" => "Ewe", "native_name" => "Eʋegbe", "iso_639_1" => "ee", "iso_639_2" => "ewe"],
            ["language_family" => "Indo-European", "language" => "Faroese", "native_name" => "føroyskt", "iso_639_1" => "fo", "iso_639_2" => "fao"],
            ["language_family" => "Austronesian", "language" => "Fijian", "native_name" => "vosa Vakaviti", "iso_639_1" => "fj", "iso_639_2" => "fij"],
            ["language_family" => "Uralic", "language" => "Finnish", "native_name" => "suomi, suomen kieli", "iso_639_1" => "fi", "iso_639_2" => "fin"],
            ["language_family" => "Indo-European", "language" => "French", "native_name" => "français, langue française", "iso_639_1" => "fr", "iso_639_2" => "fra"],
            ["language_family" => "Niger–Congo", "language" => "Fula; Fulah; Pulaar; Pular", "native_name" => "Fulfulde, Pulaar, Pular", "iso_639_1" => "ff", "iso_639_2" => "ful"],
            ["language_family" => "Indo-European", "language" => "Galician", "native_name" => "galego", "iso_639_1" => "gl", "iso_639_2" => "glg"],
            ["language_family" => "South Caucasian", "language" => "Georgian", "native_name" => "ქართული", "iso_639_1" => "ka", "iso_639_2" => "kat"],
            ["language_family" => "Indo-European", "language" => "German", "native_name" => "Deutsch", "iso_639_1" => "de", "iso_639_2" => "deu"],
            ["language_family" => "Indo-European", "language" => "Greek, Modern", "native_name" => "ελληνικά", "iso_639_1" => "el", "iso_639_2" => "ell"],
            ["language_family" => "Tupian", "language" => "Guaraní", "native_name" => "Avañe'ẽ", "iso_639_1" => "gn", "iso_639_2" => "grn"],
            ["language_family" => "Indo-European", "language" => "Gujarati", "native_name" => "ગુજરાતી", "iso_639_1" => "gu", "iso_639_2" => "guj"],
            ["language_family" => "Creole", "language" => "Haitian; Haitian Creole", "native_name" => "Kreyòl ayisyen", "iso_639_1" => "ht", "iso_639_2" => "hat"],
            ["language_family" => "Afro-Asiatic", "language" => "Hausa", "native_name" => "Hausa, هَوُسَ", "iso_639_1" => "ha", "iso_639_2" => "hau"],
            ["language_family" => "Afro-Asiatic", "language" => "Hebrew (modern)", "native_name" => "עברית", "iso_639_1" => "he", "iso_639_2" => "heb"],
            ["language_family" => "Niger–Congo", "language" => "Herero", "native_name" => "Otjiherero", "iso_639_1" => "hz", "iso_639_2" => "her"],
            ["language_family" => "Indo-European", "language" => "Hindi", "native_name" => "हिन्दी, हिंदी", "iso_639_1" => "hi", "iso_639_2" => "hin"],
            ["language_family" => "Austronesian", "language" => "Hiri Motu", "native_name" => "Hiri Motu", "iso_639_1" => "ho", "iso_639_2" => "hmo"],
            ["language_family" => "Uralic", "language" => "Hungarian", "native_name" => "magyar", "iso_639_1" => "hu", "iso_639_2" => "hun"],
            ["language_family" => "Constructed", "language" => "Interlingua", "native_name" => "Interlingua", "iso_639_1" => "ia", "iso_639_2" => "ina"],
            ["language_family" => "Austronesian", "language" => "Indonesian", "native_name" => "Bahasa Indonesia", "iso_639_1" => "id", "iso_639_2" => "ind"],
            ["language_family" => "Constructed", "language" => "Interlingue", "native_name" => "Originally called Occidental; then Interlingue after WWII", "iso_639_1" => "ie", "iso_639_2" => "ile"],
            ["language_family" => "Indo-European", "language" => "Irish", "native_name" => "Gaeilge", "iso_639_1" => "ga", "iso_639_2" => "gle"],
            ["language_family" => "Niger–Congo", "language" => "Igbo", "native_name" => "Asụsụ Igbo", "iso_639_1" => "ig", "iso_639_2" => "ibo"],
            ["language_family" => "Eskimo–Aleut", "language" => "Inupiaq", "native_name" => "Iñupiaq, Iñupiatun", "iso_639_1" => "ik", "iso_639_2" => "ipk"],
            ["language_family" => "Constructed", "language" => "Ido", "native_name" => "Ido", "iso_639_1" => "io", "iso_639_2" => "ido"],
            ["language_family" => "Indo-European", "language" => "Icelandic", "native_name" => "Íslenska", "iso_639_1" => "is", "iso_639_2" => "isl"],
            ["language_family" => "Indo-European", "language" => "Italian", "native_name" => "italiano", "iso_639_1" => "it", "iso_639_2" => "ita"],
            ["language_family" => "Eskimo–Aleut", "language" => "Inuktitut", "native_name" => "ᐃᓄᒃᑎᑐᑦ", "iso_639_1" => "iu", "iso_639_2" => "iku"],
            ["language_family" => "Japonic", "language" => "Japanese", "native_name" => "日本語 (にほんご)", "iso_639_1" => "ja", "iso_639_2" => "jpn"],
            ["language_family" => "Austronesian", "language" => "Javanese", "native_name" => "basa Jawa", "iso_639_1" => "jv", "iso_639_2" => "jav"],
            ["language_family" => "Eskimo–Aleut", "language" => "Kalaallisut, Greenlandic", "native_name" => "kalaallisut, kalaallit oqaasii", "iso_639_1" => "kl", "iso_639_2" => "kal"],
            ["language_family" => "Dravidian", "language" => "Kannada", "native_name" => "ಕನ್ನಡ", "iso_639_1" => "kn", "iso_639_2" => "kan"],
            ["language_family" => "Nilo-Saharan", "language" => "Kanuri", "native_name" => "Kanuri", "iso_639_1" => "kr", "iso_639_2" => "kau"],
            ["language_family" => "Indo-European", "language" => "Kashmiri", "native_name" => "कश्मीरी, كشميري‎", "iso_639_1" => "ks", "iso_639_2" => "kas"],
            ["language_family" => "Turkic", "language" => "Kazakh", "native_name" => "қазақ тілі", "iso_639_1" => "kk", "iso_639_2" => "kaz"],
            ["language_family" => "Austroasiatic", "language" => "Khmer", "native_name" => "ខ្មែរ, ខេមរភាសា, ភាសាខ្មែរ", "iso_639_1" => "km", "iso_639_2" => "khm"],
            ["language_family" => "Niger–Congo", "language" => "Kikuyu, Gikuyu", "native_name" => "Gĩkũyũ", "iso_639_1" => "ki", "iso_639_2" => "kik"],
            ["language_family" => "Niger–Congo", "language" => "Kinyarwanda", "native_name" => "Ikinyarwanda", "iso_639_1" => "rw", "iso_639_2" => "kin"],
            ["language_family" => "Turkic", "language" => "Kyrgyz", "native_name" => "Кыргызча, Кыргыз тили", "iso_639_1" => "ky", "iso_639_2" => "kir"],
            ["language_family" => "Uralic", "language" => "Komi", "native_name" => "коми кыв", "iso_639_1" => "kv", "iso_639_2" => "kom"],
            ["language_family" => "Niger–Congo", "language" => "Kongo", "native_name" => "KiKongo", "iso_639_1" => "kg", "iso_639_2" => "kon"],
            ["language_family" => "Language isolate", "language" => "Korean", "native_name" => "한국어 (韓國語), 조선어 (朝鮮語)", "iso_639_1" => "ko", "iso_639_2" => "kor"],
            ["language_family" => "Indo-European", "language" => "Kurdish", "native_name" => "Kurdî, كوردی‎", "iso_639_1" => "ku", "iso_639_2" => "kur"],
            ["language_family" => "Niger–Congo", "language" => "Kwanyama, Kuanyama", "native_name" => "Kuanyama", "iso_639_1" => "kj", "iso_639_2" => "kua"],
            ["language_family" => "Indo-European", "language" => "Latin", "native_name" => "latine, lingua latina", "iso_639_1" => "la", "iso_639_2" => "lat"],
            ["language_family" => "Indo-European", "language" => "Luxembourgish, Letzeburgesch", "native_name" => "Lëtzebuergesch", "iso_639_1" => "lb", "iso_639_2" => "ltz"],
            ["language_family" => "Niger–Congo", "language" => "Ganda", "native_name" => "Luganda", "iso_639_1" => "lg", "iso_639_2" => "lug"],
            ["language_family" => "Indo-European", "language" => "Limburgish, Limburgan, Limburger", "native_name" => "Limburgs", "iso_639_1" => "li", "iso_639_2" => "lim"],
            ["language_family" => "Niger–Congo", "language" => "Lingala", "native_name" => "Lingála", "iso_639_1" => "ln", "iso_639_2" => "lin"],
            ["language_family" => "Tai–Kadai", "language" => "Lao", "native_name" => "ພາສາລາວ", "iso_639_1" => "lo", "iso_639_2" => "lao"],
            ["language_family" => "Indo-European", "language" => "Lithuanian", "native_name" => "lietuvių kalba", "iso_639_1" => "lt", "iso_639_2" => "lit"],
            ["language_family" => "Niger–Congo", "language" => "Luba-Katanga", "native_name" => "Tshiluba", "iso_639_1" => "lu", "iso_639_2" => "lub"],
            ["language_family" => "Indo-European", "language" => "Latvian", "native_name" => "latviešu valoda", "iso_639_1" => "lv", "iso_639_2" => "lav"],
            ["language_family" => "Indo-European", "language" => "Manx", "native_name" => "Gaelg, Gailck", "iso_639_1" => "gv", "iso_639_2" => "glv"],
            ["language_family" => "Indo-European", "language" => "Macedonian", "native_name" => "македонски јазик", "iso_639_1" => "mk", "iso_639_2" => "mkd"],
            ["language_family" => "Austronesian", "language" => "Malagasy", "native_name" => "fiteny malagasy", "iso_639_1" => "mg", "iso_639_2" => "mlg"],
            ["language_family" => "Austronesian", "language" => "Malay", "native_name" => "bahasa Melayu, بهاس ملايو‎", "iso_639_1" => "ms", "iso_639_2" => "msa"],
            ["language_family" => "Dravidian", "language" => "Malayalam", "native_name" => "മലയാളം", "iso_639_1" => "ml", "iso_639_2" => "mal"],
            ["language_family" => "Afro-Asiatic", "language" => "Maltese", "native_name" => "Malti", "iso_639_1" => "mt", "iso_639_2" => "mlt"],
            ["language_family" => "Austronesian", "language" => "Māori", "native_name" => "te reo Māori", "iso_639_1" => "mi", "iso_639_2" => "mri"],
            ["language_family" => "Indo-European", "language" => "Marathi (Marāṭhī)", "native_name" => "मराठी", "iso_639_1" => "mr", "iso_639_2" => "mar"],
            ["language_family" => "Austronesian", "language" => "Marshallese", "native_name" => "Kajin M̧ajeļ", "iso_639_1" => "mh", "iso_639_2" => "mah"],
            ["language_family" => "Mongolic", "language" => "Mongolian", "native_name" => "монгол", "iso_639_1" => "mn", "iso_639_2" => "mon"],
            ["language_family" => "Austronesian", "language" => "Nauru", "native_name" => "Ekakairũ Naoero", "iso_639_1" => "na", "iso_639_2" => "nau"],
            ["language_family" => "Dené–Yeniseian", "language" => "Navajo, Navaho", "native_name" => "Diné bizaad, Dinékʼehǰí", "iso_639_1" => "nv", "iso_639_2" => "nav"],
            ["language_family" => "Indo-European", "language" => "Norwegian Bokmål", "native_name" => "Norsk bokmål", "iso_639_1" => "nb", "iso_639_2" => "nob"],
            ["language_family" => "Niger–Congo", "language" => "North Ndebele", "native_name" => "isiNdebele", "iso_639_1" => "nd", "iso_639_2" => "nde"],
            ["language_family" => "Indo-European", "language" => "Nepali", "native_name" => "नेपाली", "iso_639_1" => "ne", "iso_639_2" => "nep"],
            ["language_family" => "Niger–Congo", "language" => "Ndonga", "native_name" => "Owambo", "iso_639_1" => "ng", "iso_639_2" => "ndo"],
            ["language_family" => "Indo-European", "language" => "Norwegian Nynorsk", "native_name" => "Norsk nynorsk", "iso_639_1" => "nn", "iso_639_2" => "nno"],
            ["language_family" => "Indo-European", "language" => "Norwegian", "native_name" => "Norsk", "iso_639_1" => "no", "iso_639_2" => "nor"],
            ["language_family" => "Sino-Tibetan", "language" => "Nuosu", "native_name" => "ꆈꌠ꒿ Nuosuhxop", "iso_639_1" => "ii", "iso_639_2" => "iii"],
            ["language_family" => "Niger–Congo", "language" => "South Ndebele", "native_name" => "isiNdebele", "iso_639_1" => "nr", "iso_639_2" => "nbl"],
            ["language_family" => "Indo-European", "language" => "Occitan", "native_name" => "occitan, lenga d'òc", "iso_639_1" => "oc", "iso_639_2" => "oci"],
            ["language_family" => "Algonquian", "language" => "Ojibwe, Ojibwa", "native_name" => "ᐊᓂᔑᓈᐯᒧᐎᓐ", "iso_639_1" => "oj", "iso_639_2" => "oji"],
            ["language_family" => "Indo-European", "language" => "Old Church Slavonic, Church Slavonic, Old Bulgarian", "native_name" => "ѩзыкъ словѣньскъ", "iso_639_1" => "cu", "iso_639_2" => "chu"],
            ["language_family" => "Afro-Asiatic", "language" => "Oromo", "native_name" => "Afaan Oromoo", "iso_639_1" => "om", "iso_639_2" => "orm"],
            ["language_family" => "Indo-European", "language" => "Oriya", "native_name" => "ଓଡ଼ିଆ", "iso_639_1" => "or", "iso_639_2" => "ori"],
            ["language_family" => "Indo-European", "language" => "Ossetian, Ossetic", "native_name" => "ирон æвзаг", "iso_639_1" => "os", "iso_639_2" => "oss"],
            ["language_family" => "Indo-European", "language" => "Panjabi, Punjabi", "native_name" => "ਪੰਜਾਬੀ, پنجابی‎", "iso_639_1" => "pa", "iso_639_2" => "pan"],
            ["language_family" => "Indo-European", "language" => "Pāli", "native_name" => "पाऴि", "iso_639_1" => "pi", "iso_639_2" => "pli"],
            ["language_family" => "Indo-European", "language" => "Persian (Farsi)", "native_name" => "فارسی", "iso_639_1" => "fa", "iso_639_2" => "fas"],
            ["language_family" => "Indo-European", "language" => "Polish", "native_name" => "język polski, polszczyzna", "iso_639_1" => "pl", "iso_639_2" => "pol"],
            ["language_family" => "Indo-European", "language" => "Pashto, Pushto", "native_name" => "پښتو", "iso_639_1" => "ps", "iso_639_2" => "pus"],
            ["language_family" => "Indo-European", "language" => "Portuguese", "native_name" => "português", "iso_639_1" => "pt", "iso_639_2" => "por"],
            ["language_family" => "Quechuan", "language" => "Quechua", "native_name" => "Runa Simi, Kichwa", "iso_639_1" => "qu", "iso_639_2" => "que"],
            ["language_family" => "Indo-European", "language" => "Romansh", "native_name" => "rumantsch grischun", "iso_639_1" => "rm", "iso_639_2" => "roh"],
            ["language_family" => "Niger–Congo", "language" => "Kirundi", "native_name" => "Ikirundi", "iso_639_1" => "rn", "iso_639_2" => "run"],
            ["language_family" => "Indo-European", "language" => "Romanian", "native_name" => "limba română", "iso_639_1" => "ro", "iso_639_2" => "ron"],
            ["language_family" => "Indo-European", "language" => "Russian", "native_name" => "русский язык", "iso_639_1" => "ru", "iso_639_2" => "rus"],
            ["language_family" => "Indo-European", "language" => "Sanskrit (Saṁskṛta)", "native_name" => "संस्कृतम्", "iso_639_1" => "sa", "iso_639_2" => "san"],
            ["language_family" => "Indo-European", "language" => "Sardinian", "native_name" => "sardu", "iso_639_1" => "sc", "iso_639_2" => "srd"],
            ["language_family" => "Indo-European", "language" => "Sindhi", "native_name" => "सिन्धी, سنڌي، سندھی‎", "iso_639_1" => "sd", "iso_639_2" => "snd"],
            ["language_family" => "Uralic", "language" => "Northern Sami", "native_name" => "Davvisámegiella", "iso_639_1" => "se", "iso_639_2" => "sme"],
            ["language_family" => "Austronesian", "language" => "Samoan", "native_name" => "gagana fa'a Samoa", "iso_639_1" => "sm", "iso_639_2" => "smo"],
            ["language_family" => "Creole", "language" => "Sango", "native_name" => "yângâ tî sängö", "iso_639_1" => "sg", "iso_639_2" => "sag"],
            ["language_family" => "Indo-European", "language" => "Serbian", "native_name" => "српски језик", "iso_639_1" => "sr", "iso_639_2" => "srp"],
            ["language_family" => "Indo-European", "language" => "Scottish Gaelic; Gaelic", "native_name" => "Gàidhlig", "iso_639_1" => "gd", "iso_639_2" => "gla"],
            ["language_family" => "Niger–Congo", "language" => "Shona", "native_name" => "chiShona", "iso_639_1" => "sn", "iso_639_2" => "sna"],
            ["language_family" => "Indo-European", "language" => "Sinhala, Sinhalese", "native_name" => "සිංහල", "iso_639_1" => "si", "iso_639_2" => "sin"],
            ["language_family" => "Indo-European", "language" => "Slovak", "native_name" => "slovenčina, slovenský jazyk", "iso_639_1" => "sk", "iso_639_2" => "slk"],
            ["language_family" => "Indo-European", "language" => "Slovene", "native_name" => "slovenski jezik, slovenščina", "iso_639_1" => "sl", "iso_639_2" => "slv"],
            ["language_family" => "Afro-Asiatic", "language" => "Somali", "native_name" => "Soomaaliga, af Soomaali", "iso_639_1" => "so", "iso_639_2" => "som"],
            ["language_family" => "Niger–Congo", "language" => "Southern Sotho", "native_name" => "Sesotho", "iso_639_1" => "st", "iso_639_2" => "sot"],
            ["language_family" => "Turkic", "language" => "South Azerbaijani", "native_name" => "تورکجه‎", "iso_639_1" => "az", "iso_639_2" => "azb"],
            ["language_family" => "Indo-European", "language" => "Spanish; Castilian", "native_name" => "español, castellano", "iso_639_1" => "es", "iso_639_2" => "spa"],
            ["language_family" => "Austronesian", "language" => "Sundanese", "native_name" => "Basa Sunda", "iso_639_1" => "su", "iso_639_2" => "sun"],
            ["language_family" => "Niger–Congo", "language" => "Swahili", "native_name" => "Kiswahili", "iso_639_1" => "sw", "iso_639_2" => "swa"],
            ["language_family" => "Niger–Congo", "language" => "Swati", "native_name" => "SiSwati", "iso_639_1" => "ss", "iso_639_2" => "ssw"],
            ["language_family" => "Indo-European", "language" => "Swedish", "native_name" => "Svenska", "iso_639_1" => "sv", "iso_639_2" => "swe"],
            ["language_family" => "Dravidian", "language" => "Tamil", "native_name" => "தமிழ்", "iso_639_1" => "ta", "iso_639_2" => "tam"],
            ["language_family" => "Dravidian", "language" => "Telugu", "native_name" => "తెలుగు", "iso_639_1" => "te", "iso_639_2" => "tel"],
            ["language_family" => "Indo-European", "language" => "Tajik", "native_name" => "тоҷикӣ, toğikī, تاجیکی‎", "iso_639_1" => "tg", "iso_639_2" => "tgk"],
            ["language_family" => "Tai–Kadai", "language" => "Thai", "native_name" => "ไทย", "iso_639_1" => "th", "iso_639_2" => "tha"],
            ["language_family" => "Afro-Asiatic", "language" => "Tigrinya", "native_name" => "ትግርኛ", "iso_639_1" => "ti", "iso_639_2" => "tir"],
            ["language_family" => "Sino-Tibetan", "language" => "Tibetan Standard, Tibetan, Central", "native_name" => "བོད་ཡིག", "iso_639_1" => "bo", "iso_639_2" => "bod"],
            ["language_family" => "Turkic", "language" => "Turkmen", "native_name" => "Türkmen, Түркмен", "iso_639_1" => "tk", "iso_639_2" => "tuk"],
            ["language_family" => "Austronesian", "language" => "Tagalog", "native_name" => "Wikang Tagalog, ᜏᜒᜃᜅ᜔ ᜆᜄᜎᜓᜄ᜔", "iso_639_1" => "tl", "iso_639_2" => "tgl"],
            ["language_family" => "Niger–Congo", "language" => "Tswana", "native_name" => "Setswana", "iso_639_1" => "tn", "iso_639_2" => "tsn"],
            ["language_family" => "Austronesian", "language" => "Tonga (Tonga Islands)", "native_name" => "faka Tonga", "iso_639_1" => "to", "iso_639_2" => "ton"],
            ["language_family" => "Turkic", "language" => "Turkish", "native_name" => "Türkçe", "iso_639_1" => "tr", "iso_639_2" => "tur"],
            ["language_family" => "Niger–Congo", "language" => "Tsonga", "native_name" => "Xitsonga", "iso_639_1" => "ts", "iso_639_2" => "tso"],
            ["language_family" => "Turkic", "language" => "Tatar", "native_name" => "татар теле, tatar tele", "iso_639_1" => "tt", "iso_639_2" => "tat"],
            ["language_family" => "Niger–Congo", "language" => "Twi", "native_name" => "Twi", "iso_639_1" => "tw", "iso_639_2" => "twi"],
            ["language_family" => "Austronesian", "language" => "Tahitian", "native_name" => "Reo Tahiti", "iso_639_1" => "ty", "iso_639_2" => "tah"],
            ["language_family" => "Turkic", "language" => "Uyghur, Uighur", "native_name" => "Uyƣurqə, ئۇيغۇرچە‎", "iso_639_1" => "ug", "iso_639_2" => "uig"],
            ["language_family" => "Indo-European", "language" => "Ukrainian", "native_name" => "українська мова", "iso_639_1" => "uk", "iso_639_2" => "ukr"],
            ["language_family" => "Indo-European", "language" => "Urdu", "native_name" => "اردو", "iso_639_1" => "ur", "iso_639_2" => "urd"],
            ["language_family" => "Turkic", "language" => "Uzbek", "native_name" => "O‘zbek, Ўзбек, أۇزبېك‎", "iso_639_1" => "uz", "iso_639_2" => "uzb"],
            ["language_family" => "Niger–Congo", "language" => "Venda", "native_name" => "Tshivenḓa", "iso_639_1" => "ve", "iso_639_2" => "ven"],
            ["language_family" => "Austroasiatic", "language" => "Vietnamese", "native_name" => "Tiếng Việt", "iso_639_1" => "vi", "iso_639_2" => "vie"],
            ["language_family" => "Constructed", "language" => "Volapük", "native_name" => "Volapük", "iso_639_1" => "vo", "iso_639_2" => "vol"],
            ["language_family" => "Indo-European", "language" => "Walloon", "native_name" => "walon", "iso_639_1" => "wa", "iso_639_2" => "wln"],
            ["language_family" => "Indo-European", "language" => "Welsh", "native_name" => "Cymraeg", "iso_639_1" => "cy", "iso_639_2" => "cym"],
            ["language_family" => "Niger–Congo", "language" => "Wolof", "native_name" => "Wollof", "iso_639_1" => "wo", "iso_639_2" => "wol"],
            ["language_family" => "Indo-European", "language" => "Western Frisian", "native_name" => "Frysk", "iso_639_1" => "fy", "iso_639_2" => "fry"],
            ["language_family" => "Niger–Congo", "language" => "Xhosa", "native_name" => "isiXhosa", "iso_639_1" => "xh", "iso_639_2" => "xho"],
            ["language_family" => "Indo-European", "language" => "Yiddish", "native_name" => "ייִדיש", "iso_639_1" => "yi", "iso_639_2" => "yid"],
            ["language_family" => "Niger–Congo", "language" => "Yoruba", "native_name" => "Yorùbá", "iso_639_1" => "yo", "iso_639_2" => "yor"],
            ["language_family" => "Tai–Kadai", "language" => "Zhuang, Chuang", "native_name" => "Saɯ cueŋƅ, Saw cuengh", "iso_639_1" => "za", "iso_639_2" => "zha"],
            ["language_family" => "Niger–Congo", "language" => "Zulu", "native_name" => "isiZulu", "iso_639_1" => "zu", "iso_639_2" => "zul"],

        ];

        DB::beginTransaction();

        try {
            foreach ($list as $language) {

                $language['id'] = $language['iso_639_2'];

                $existing = HCLanguages::where ('id', $language['id'])->first ();

                if (!$existing)
                    HCLanguages::create($language);
            }
        } catch (\Exception $e) {
            DB::rollback();

            throw new Exception($e->getMessage());
        }

        DB::commit();
    }
}
